<?php
include(APPPATH . 'third_party/fusioncharts.php');
?>

<!-- User Record Modal -->
<div id = "record-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-heading text-center">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"style = "display: inline-block;">Record of <?php echo $user->first_name . " " . $user->last_name ?></h4>
            </div>
            <div class="modal-body text-center">
                <div class = "row">
                    <img src = "<?php echo $user->profile_url ? base_url($user->profile_url) : base_url("images/default.jpg"); ?>" class = "img-circle" width = "100px" height = "100px" />
                    <h5 class = "text-info no-margin"><strong><?php echo $user->first_name . " " . $user->last_name ?></strong></h5>
                    <p class = "text-muted"><i><?php echo $user->email; ?></i></p>
                    <div class = "col-sm-12">
                        <ul class = "nav nav-tabs nav-justified">
                            <li class = "active"><a href = "#topic-record" data-toggle = "tab">Topics</a></li>
                            <li><a href = "#post-record" data-toggle = "tab">Posts and Replies</a></li>
                            <li><a href = "#vote-record" data-toggle = "tab">Votes</a></li>
                        </ul>
                    </div>
                    <div class = "col-sm-12">
                        <div class="tab-content">
                            <!--TOPICS TAB-->
                            <div id="topic-record" class="tab-pane fade in active record-tab">
                                <div class = "col-sm-4">
                                    <h2 class = "text-info"><strong><?php echo $record->topic_count ?></strong></h2>
                                    <p>Topics Created</p>
                                </div>
                                <div class = "col-sm-4">
                                    <h2 class = "text-info"><strong><?php echo $record->followed_topic_count ?></strong></h2>
                                    <p>Topics Followed</p>
                                </div>
                                <div class = "col-sm-4">
                                    <h2 class = "text-info"><strong><?php echo $record->moderated_topic_count ?></strong></h2>
                                    <p>Topics Moderated</p>
                                </div>
                            </div>

                            <!--POSTS TAB-->
                            <div id="post-record" class="tab-pane fade record-tab">
                                <ul class = "nav nav-pills nav-justified">
                                    <li class = "active"><a href = "#post-statistics" data-toggle = "pill">Statistical Data</a></li>
                                    <li><a href = "#post-thread" data-toggle = "pill">Post Threads</a></li>
                                    <li><a href = "#post-topic" data-toggle = "pill">Posts Published</a></li>
                                    <li><a href = "#post-reply" data-toggle = "pill">Replies</a></li>
                                </ul>

                                <div class = "tab-content">
                                    <!--POSTS STATISTICS-->
                                    <div id = "post-statistics" class = "tab-pane fade in active">
                                        <div class = "col-sm-6">
                                            <h2 class = "text-info"><strong><?php echo $record->post_count ?></strong></h2>
                                            <p>Posts Published</p>
                                        </div>
                                        <div class = "col-sm-6">
                                            <h2 class = "text-info"><strong><?php echo $record->reply_count ?></strong></h2>
                                            <p>Replies Made</p>
                                        </div>
                                    </div>

                                    <!--POSTS GRAPHS-->

                                    <!--THREAD GRAPH-->
                                    <div id = "post-thread" class = "tab-pane fade">
                                        <?php
                                        $threadChart = new FusionCharts("column2d", "ex1", "80%", 300, "thread-chart", "json", '{  
                "chart":{  
                  "caption":"Post Threads Started by ' . $user->first_name . '",
                  "subCaption":"Top topics posted in by ' . $user->first_name . '",
                  "theme":"fint",
                  "baseFont":"Muli"
                },
                "data":[  
                  {  
                     "label":"Bakersfield Central",
                     "value":"880000"
                  },
                  {  
                     "label":"Garden Groove harbour",
                     "value":"730000"
                  },
                  {  
                     "label":"Los Angeles Topanga",
                     "value":"590000"
                  },
                  {  
                     "label":"Compton-Rancho Dom",
                     "value":"520000"
                  },
                  {  
                     "label":"Daly City Serramonte",
                     "value":"330000"
                  }
                ]
            }');

                                        $threadChart->render();
                                        ?>
                                        <div id="thread-chart"></div>
                                    </div>

                                    <!--POSTS PUBLISHED-->
                                    <div id = "post-topic" class = "tab-pane fade">
                                        <?php
                                        $postTopicChart = new FusionCharts("column2d", "ex2", "80%", 300, "post-topic-chart", "json", '{  
                "chart":{  
                  "caption":"Posts in Topics Published by ' . $user->first_name . '",
                  "subCaption":"Top topics posted in by ' . $user->first_name . '",
                  "theme":"fint",
                  "baseFont":"Muli"
                },
                "data":[  
                  {  
                     "label":"Bakersfield Central",
                     "value":"880000"
                  },
                  {  
                     "label":"Garden Groove harbour",
                     "value":"730000"
                  },
                  {  
                     "label":"Los Angeles Topanga",
                     "value":"590000"
                  },
                  {  
                     "label":"Compton-Rancho Dom",
                     "value":"520000"
                  },
                  {  
                     "label":"Daly City Serramonte",
                     "value":"330000"
                  }
                ]
            }');
                                        $postTopicChart->render();
                                        ?>
                                        <div id="post-topic-chart"></div>
                                    </div>

                                    <!--POSTS PUBLISHED-->
                                    <div id = "post-reply" class = "tab-pane fade">
                                        <?php
                                        $postReplyChart = new FusionCharts("column2d", "ex3", "80%", 300, "post-reply-chart", "json", '{  
                "chart":{  
                  "caption":"Replies Made by ' . $user->first_name . '",
                  "subCaption":"Top users replied to by ' . $user->first_name . '",
                  "theme":"fint",
                  "baseFont":"Muli"
                },
                "data":[  
                  {  
                     "label":"Bakersfield Central",
                     "value":"880000"
                  },
                  {  
                     "label":"Garden Groove harbour",
                     "value":"730000"
                  },
                  {  
                     "label":"Los Angeles Topanga",
                     "value":"590000"
                  },
                  {  
                     "label":"Compton-Rancho Dom",
                     "value":"520000"
                  },
                  {  
                     "label":"Daly City Serramonte",
                     "value":"330000"
                  }
                ]
            }');

                                        $postReplyChart->render();
                                        ?>
                                        <div id="post-reply-chart"></div>
                                    </div>
                                </div>
                            </div>

                            <!--VOTES TAB-->
                            <div id="vote-record" class="tab-pane fade record-tab">
                                <ul class = "nav nav-pills nav-justified">
                                    <li class = "active"><a href = "#vote-statistics" data-toggle = "pill">Statistical Data</a></li>
                                    <li><a href = "#upvote-users" data-toggle = "pill">Upvotes</a></li>
                                    <li><a href = "#downvote-users" data-toggle = "pill">Downvotes</a></li>
                                </ul>

                                <div class = "tab-content">
                                    <div id = "vote-statistics" class = "tab-pane fade in active">
                                        <div class = "col-sm-4">
                                            <h2 class = "text-info"><strong><?php echo $record->upvote_count ?></strong></h2>
                                            <p>Upvotes Given</p>
                                        </div>
                                        <div class = "col-sm-4">
                                            <h2 class = "text-info"><strong><?php echo $record->downvote_count ?></strong></h2>
                                            <p>Downvotes Given</p>
                                        </div>
                                        <div class = "col-sm-4">
                                            <h2 class = "text-info"><strong><?php echo $record->points ?></strong></h2>
                                            <p>Vote Points</p>
                                        </div>
                                    </div>
                                    <div id = "upvote-users" class = "tab-pane fade">
                                        <?php
                                        $upvoteChart = new FusionCharts("column2d", "ex4", "80%", 300, "upvote-chart", "json", '{  
                "chart":{  
                  "caption":"Post Threads Started by ' . $user->first_name . '",
                  "subCaption":"Top topics posted in by ' . $user->first_name . '",
                  "theme":"fint",
                  "baseFont":"Muli"
                },
                "data":[  
                  {  
                     "label":"Bakersfield Central",
                     "value":"880000"
                  },
                  {  
                     "label":"Garden Groove harbour",
                     "value":"730000"
                  },
                  {  
                     "label":"Los Angeles Topanga",
                     "value":"590000"
                  },
                  {  
                     "label":"Compton-Rancho Dom",
                     "value":"520000"
                  },
                  {  
                     "label":"Daly City Serramonte",
                     "value":"330000"
                  }
                ]
            }');

                                        $upvoteChart->render();
                                        ?>
                                        <div id="upvote-chart"></div>
                                    </div>
                                    <div id = "downvote-users" class = "tab-pane fade">
                                        <?php
                                        $downvoteChart = new FusionCharts("column2d", "ex5", "80%", 300, "downvote-chart", "json", '{  
                "chart":{  
                  "caption":"Post Threads Started by ' . $user->first_name . '",
                  "subCaption":"Top topics posted in by ' . $user->first_name . '",
                  "theme":"fint",
                  "baseFont":"Muli"
                },
                "data":[  
                  {  
                     "label":"Bakersfield Central",
                     "value":"880000"
                  },
                  {  
                     "label":"Garden Groove harbour",
                     "value":"730000"
                  },
                  {  
                     "label":"Los Angeles Topanga",
                     "value":"590000"
                  },
                  {  
                     "label":"Compton-Rancho Dom",
                     "value":"520000"
                  },
                  {  
                     "label":"Daly City Serramonte",
                     "value":"330000"
                  }
                ]
            }');

                                        $downvoteChart->render();
                                        ?>
                                        <div id="downvote-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>