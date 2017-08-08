//global variables for vis
var nodes, edges, options, container, data, network;

$(document).ready(function () {
    initializeNetwork();

    $('#reset-map').on('click', function () {
        loadDefaultNetwork();
    });
});

function initializeNetwork() {
    nodes = new vis.DataSet();
    edges = new vis.DataSet();
    container = document.getElementById('interaction-network');
    // provide the data in the vis format
    data = {
        nodes: nodes,
        edges: edges};

    options = {nodes: {shape: 'dot', size: 15}};
    // initialize your network!
    network = new vis.Network(container, data, options);

    var ids, cNodes, chosen_id;

    network.on('doubleClick', function (params) {
        ids = params.nodes;
        cNodes = nodes.get(ids);
        if (cNodes.length > 0) {
            chosen_id = cNodes[0].id;
            if (chosen_id.indexOf("u") > -1) {
                loadUserNetwork(chosen_id.substring(1));
            } else if (chosen_id.indexOf("t") > -1) {
                alert('topic!');
            }
        }
    });
    loadDefaultNetwork();
}

function loadDefaultNetwork() {
    var user_data = "[";
    var topic_data = "";
    var network_data;

    //clear network
    nodes.clear();
    edges.clear();

    //load the network data
    $.get(window.location.origin + '/GetTogetherBeta/admin/load_network', function (result) {
        network_data = JSON.parse(result);
        var users = network_data.users;
        var topics = network_data.topics;
        var merged_data;

        //get the user nodes
        for (var i = 0; i < users.length; i++) {
            user_data += '{"id": "u' + users[i].user_id + '", "title": "' + users[i].first_name
                    + ' ' + users[i].last_name + '"}, ';
        }

        //get the topic nodes
        for (var i = 0; i < topics.length; i++) {
            topic_data += '{"id": "t' + topics[i].topic_id + '", "shape": "square", "title": "' +
                    topics[i].topic_name + '"}, ';
        }

        if (topic_data.length > 2) {
            topic_data = topic_data.substring(0, topic_data.length - 2) + "]";
        }

        //merge nodes
        merged_data = user_data + topic_data;
        nodes.add(JSON.parse(merged_data));

        var temp_users = [];
        var index;   // <-- Not supported in <IE9
        user_data = "[";
        topic_data = "";
        //set user connections
        for (var i = 0; i < users.length; i++) {
            temp_users.push(users[i].user_id);
        }

        var map;
        for (var i = 0; i < users.length; i++) {
            map = users[i].user_map;
            for (var j = 0; j < map.length; j++) {
                index = temp_users.indexOf(map[j].user_id);
                if (index !== -1 && map[j].user_id !== users[i].user_id) {
                    user_data += '{"from": "u' + users[i].user_id + '", "to": "u' + map[j].user_id + '", "width": 2}, ';
                }
            }
            index = temp_users.indexOf(users[i].user_id);
            temp_users.splice(index, 1);
        }

        if (user_data.length > 2) {
            user_data = user_data.substring(0, user_data.length - 2) + ", ";
        }

        //set topic connections
        for (var i = 0; i < users.length; i++) {
            map = users[i].topic_map;
            for (var j = 0; j < map.length; j++) {
                topic_data += '{"from": "u' + users[i].user_id + '", "to": "t' + map[j].topic_id + '", "width": 2}, ';
            }
        }

        if (topic_data.length > 2) {
            topic_data = topic_data.substring(0, topic_data.length - 2) + "]";
        }

        merged_data = user_data + topic_data;         // create an array with edges
        edges.add(JSON.parse(merged_data));

        // initialize your network!
        network.redraw();
    });
}

function loadUserNetwork(user_id) {
    nodes.clear();
    edges.clear();

    var user_data = "[";
    $.get(window.location.origin + '/GetTogetherBeta/admin/user_network/' + user_id, function (result) {
        var map;
        var user = JSON.parse(result);
        var user_nodes = [];

        //add node of self
        nodes.add({"id": "u" + user.user_id, "title": user.first_name + " " + user.last_name, "color": "#ff0000"});

        //add nodes of other users

        //replies nodes
        map = JSON.parse(result).reply_map;
        for (var i = 0; i < map.length; i++) {
            if (map[i].user_id !== user.user_id) {
                user_data += '{"id": "u' + map[i].user_id + '", "title": "' + map[i].first_name + " " + map[i].last_name
                        + '"}, ';

                user_nodes.push(map[i].user_id);
            }
        }

        //downvotes nodes
        map = JSON.parse(result).downvote_map;
        for (var i = 0; i < map.length; i++) {
            if (user_nodes.indexOf(map[i].user_id) === -1 && map[i].user_id !== user.user_id) {
                user_data += '{"id": "u' + map[i].user_id + '", "title": "' + map[i].first_name + " " + map[i].last_name
                        + '"}, ';

                user_nodes.push(map[i].user_id);
            }
        }

        //upvotes nodes
        map = JSON.parse(result).upvote_map;
        for (var i = 0; i < map.length; i++) {
            if (user_nodes.indexOf(map[i].user_id) === -1 && map[i].user_id !== user.user_id) {
                user_data += '{"id": "u' + map[i].user_id + '", "title": "' + map[i].first_name + " " + map[i].last_name
                        + '"}, ';
            }
        }

        user_data = user_data.substring(0, user_data.length - 2) + "]";
        //alert(user_data);
        //add all nodes
        
        //add nodes of topics
        
        nodes.add(JSON.parse(user_data));

        //add edges
        user_data = "[";

        //replies edges
        map = JSON.parse(result).reply_map;
        for (var i = 0; i < map.length; i++) {
            user_data += '{"from": "u' + user.user_id + '", "to": "u' + map[i].user_id + '", "color": "#0000ff", "width": ' + getWidth(map[i].reply_count, JSON.parse(result).total_reply.total_reply) + '}, ';
        }

        //downvotes edges
        map = JSON.parse(result).downvote_map;
        for (var i = 0; i < map.length; i++) {
            user_data += '{"from": "u' + user.user_id + '", "to": "u' + map[i].user_id + '", "color": "#ff0000", "width": '
                    + getWidth(map[i].downvote_count, JSON.parse(result).total_downvote.total_downvote) + '}, ';
        }

        //upvotes edges
        map = JSON.parse(result).upvote_map;
        for (var i = 0; i < map.length; i++) {
            user_data += '{"from": "u' + user.user_id + '", "to": "u' + map[i].user_id + '", "color": "#00ff00", "width": '
                    + getWidth(map[i].upvote_count, JSON.parse(result).total_upvote.total_upvote) + '}, ';
        }

        user_data = user_data.substring(0, user_data.length - 2) + "]";
        
        //edges of topics
        
        edges.add(JSON.parse(user_data));
        network.redraw();
    });
}

function getWidth(data_count, total_data) {
    var width = Math.round(data_count / total_data * 10);
    return width <= 1 ? 1 : width;
}