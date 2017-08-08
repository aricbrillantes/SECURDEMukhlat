//global variables for vis
var nodes, edges, options, container, data, network;

$(document).ready(function () {
    initializeNetwork();

    $('#reset-map').on('click', function () {
        loadDefaultNetwork();
    });

    $(document).on('change', "input[type=radio][name=network-filter]", function () {
        var filter = $(this).val().substring(0, 1);
        var id = $(this).val().substring(2);
        if ($(this).val().indexOf('u') > -1) {
            loadUserNetwork(id, filter);
        } else if ($(this).val().indexOf('t') > -1) {
        }
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
                loadUserNetwork(chosen_id.substring(1), 'a');
            } else if (chosen_id.indexOf("t") > -1) {
                loadWithinTopic(chosen_id.substring(1));
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

    //change UI
    $("#network-header").html("Interaction Network within GetTogether");
    $("#topic-tools").remove();
    $("#filter-tools").remove();

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
        var index;
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

function loadUserNetwork(user_id, filter) {
    nodes.clear();
    edges.clear();

    var user_data = "[";
    var topic_data = "";
    $.get(window.location.origin + '/GetTogetherBeta/admin/user_network/' + user_id, function (result) {
        var map;
        var user = JSON.parse(result);
        var user_nodes = [];
        var topic_nodes = [];

        //change UI
        $("#network-header").html("Interaction Network of " + user.first_name + " " + user.last_name);
        $("#topic-tools").remove();
        showFilterTools('u' + user_id, filter);

        //add node of self
        nodes.add({"id": "u" + user.user_id, "title": user.first_name + " " + user.last_name, "color": "#ff0000"});

        //add nodes of other users
        if (filter !== 'c') {
            //replies nodes
            map = user.reply_map;
            for (var i = 0; i < map.length; i++) {
                if (map[i].user_id !== user.user_id) {
                    user_data += '{"id": "u' + map[i].user_id + '", "title": "' + map[i].first_name + " " + map[i].last_name
                            + '"}, ';

                    user_nodes.push(map[i].user_id);
                }
            }

            //downvotes nodes
            map = user.downvote_user_map;
            for (var i = 0; i < map.length; i++) {
                if (user_nodes.indexOf(map[i].user_id) === -1 && map[i].user_id !== user.user_id) {
                    user_data += '{"id": "u' + map[i].user_id + '", "title": "' + map[i].first_name + " " + map[i].last_name
                            + '"}, ';

                    user_nodes.push(map[i].user_id);
                }
            }

            //upvotes nodes
            map = user.upvote_user_map;
            for (var i = 0; i < map.length; i++) {
                if (user_nodes.indexOf(map[i].user_id) === -1 && map[i].user_id !== user.user_id) {
                    user_data += '{"id": "u' + map[i].user_id + '", "title": "' + map[i].first_name + " " + map[i].last_name
                            + '"}, ';
                }
            }
        }

        if (filter !== 'b') {
            if (filter === 'c') {
                topic_data = "[";
            }

            //add topic nodes
            //post/replies to topic [nodes]
            map = user.post_map;
            for (var i = 0; i < map.length; i++) {
                if (topic_nodes.indexOf(map[i].topic_id) === -1) {
                    topic_data += '{"id": "t' + map[i].topic_id + '", "title": "' + map[i].topic_name + '", "shape": "square"}, ';

                    topic_nodes.push(map[i].topic_id);
                }
            }

            //downvote to topic [nodes]
            map = user.downvote_topic_map;
            for (var i = 0; i < map.length; i++) {
                if (topic_nodes.indexOf(map[i].topic_id) === -1) {
                    topic_data += '{"id": "t' + map[i].topic_id + '", "title": "' + map[i].topic_name + '", "shape": "square"}, ';

                    topic_nodes.push(map[i].topic_id);
                }
            }

            //upvote to topic [nodes]
            map = user.upvote_topic_map;
            for (var i = 0; i < map.length; i++) {
                if (topic_nodes.indexOf(map[i].topic_id) === -1) {
                    topic_data += '{"id": "t' + map[i].topic_id + '", "title": "' + map[i].topic_name + '", "shape": "square"}, ';
                }
            }
        }
        //merge user and topic nodes
        if (filter === 'a') {
            topic_data = topic_data.substring(0, topic_data.length - 2) + "]";
            nodes.add(JSON.parse(user_data + topic_data));
        } else if (filter === 'b') {
            user_data = user_data.substring(0, user_data.length - 2) + "]";
            nodes.add(JSON.parse(user_data));
        } else if (filter === 'c') {
            topic_data = topic_data.substring(0, topic_data.length - 2) + "]";
            nodes.add(JSON.parse(topic_data));
        }

        //- add edges -------------------------
        user_data = "[";
        topic_data = "";

        if (filter !== 'c') {
            //replies edges
            map = user.reply_map;
            for (var i = 0; i < map.length; i++) {
                user_data += '{"from": "u' + user.user_id + '", "to": "u' + map[i].user_id + '", "color": "#0000ff", "width": ' + getWidth(map[i].reply_count, JSON.parse(result).total_reply.total_reply) + '}, ';
            }

            //downvotes edges
            map = user.downvote_user_map;
            for (var i = 0; i < map.length; i++) {
                user_data += '{"from": "u' + user.user_id + '", "to": "u' + map[i].user_id + '", "color": "#ff0000", "width": '
                        + getWidth(map[i].downvote_count, user.total_downvote.total_downvote) + '}, ';
            }

            //upvotes edges
            map = user.upvote_user_map;
            for (var i = 0; i < map.length; i++) {
                user_data += '{"from": "u' + user.user_id + '", "to": "u' + map[i].user_id + '", "color": "#00ff00", "width": '
                        + getWidth(map[i].upvote_count, user.total_upvote.total_upvote) + '}, ';
            }
        }

        if (filter !== 'b') {
            if (filter === 'c') {
                topic_data = "[";
            }
            //post topic edges
            map = user.post_map;
            for (var i = 0; i < map.length; i++) {
                topic_data += '{"from": "u' + user.user_id + '", "to": "t' + map[i].topic_id + '", "color": "#0000ff", "width": ' + getWidth(map[i].post_count, JSON.parse(result).total_post.total_post) + '}, ';
            }

            //downvotes edges [topic]
            map = user.downvote_topic_map;
            for (var i = 0; i < map.length; i++) {
                topic_data += '{"from": "u' + user.user_id + '", "to": "t' + map[i].topic_id + '", "color": "#ff0000", "width": '
                        + getWidth(map[i].downvote_count, user.total_downvote.total_downvote) + '}, ';
            }

            //upvotes edges [topic]
            map = user.upvote_topic_map;
            for (var i = 0; i < map.length; i++) {
                topic_data += '{"from": "u' + user.user_id + '", "to": "t' + map[i].topic_id + '", "color": "#00ff00", "width": '
                        + getWidth(map[i].upvote_count, user.total_upvote.total_upvote) + '}, ';
            }
        }
        if (filter === 'a') {
            topic_data = topic_data.substring(0, topic_data.length - 2) + "]";
            edges.add(JSON.parse(user_data + topic_data));
        } else if (filter === 'b') {
            user_data = user_data.substring(0, user_data.length - 2) + "]";
            edges.add(JSON.parse(user_data));
        } else if (filter === 'c') {
            topic_data = topic_data.substring(0, topic_data.length - 2) + "]";
            edges.add(JSON.parse(topic_data));
        }
        network.redraw();
    });
}

function loadWithinTopic(topic_id) {
    var user_data = "[";

    //clear network
    nodes.clear();
    edges.clear();

    $.get(window.location.origin + '/GetTogetherBeta/admin/within_topic/' + topic_id, function (result) {
        var topic = JSON.parse(result);
        var users = topic.users;

        //change UI
        $("#network-header").html("Interaction Network of users within " + topic.topic_name);
        showTopicTools(topic.topic_id, topic.topic_name);

        //get user nodes
        for (var i = 0; i < users.length; i++) {
            user_data += '{"id": "u' + users[i].user_id + '", "title": "' + users[i].first_name
                    + ' ' + users[i].last_name + '"}, ';
        }

        user_data = user_data.substring(0, user_data.length - 2) + "]";

        //add nodes
        nodes.add(JSON.parse(user_data));

        var temp_users = [];
        user_data = "[";
        //set user connections
        for (var i = 0; i < users.length; i++) {
            temp_users.push(users[i].user_id);
        }

        var map;
        var index;

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
            user_data = user_data.substring(0, user_data.length - 2) + "]";
        }

        //add edges
        edges.add(JSON.parse(user_data));
        network.redraw();
    });
}

function getWidth(data_count, total_data) {
    var width = Math.round(data_count / total_data * 10);
    return width <= 1 ? 1 : width;
}

function showTopicTools(id, name) {
    $("#topic-tools").remove();
    $("#network-tools").append('<div id = "topic-tools" class = "col-xs-7 col-md-offset-3" style = "margin-top: 5px;">' +
            '<h5 style = "display: inline;">Change Topic Map: </h5>' +
            '<select id = "network-view" style = "width: 60%;">' +
            '<option value = "a' + id + '">Interaction Network of users within ' + name + '</option>' +
            '<option value = "b' + id + '">Interaction Network of ' + name + '</option>' +
            '</select>' +
            '</div>');
}

function showFilterTools(id, filter) {
    $("#filter-tools").remove();
    $("#network-tools").append('<div id = "filter-tools" class = "col-xs-8 col-md-offset-2">' +
            '<div class = "col-xs-3 text-right" style = "margin-top: 2px;">' +
            '<h5 style = "display: inline;"><strong>Map Filter:</strong></h5>' +
            '</div>' +
            '<div class = "col-xs-9 text-left">' +
            '<label class="radio-inline"><input type="radio" name="network-filter" value = "a' + id + '" ' + (filter === 'a' ? 'checked' : '') +'>Show Both</label>' +
            '<label class="radio-inline"><input type="radio" name="network-filter" value = "b' + id + '" ' + (filter === 'b' ? 'checked' : '') +'>Users Only</label>' +
            '<label class="radio-inline"><input type="radio" name="network-filter" value = "c' + id + '" ' + (filter === 'c' ? 'checked' : '') +'>Topics Only</label>' +
            '</div>' +
            '</div>');
}