<!-- Create Topic Modal -->
<div id="create-topic-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Create Topic Modal Content-->
        <div class="modal-content">
            <div class="modal-header modal-heading">
                <button type="button" class="close" style = "padding: 5px; padding-right: 15px;" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Create Topic</strong></h4>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group"><!-- check if title is already taken -->
                        <label for = "title">Enter a title for your topic:</label>
                        <input type="text" class="form-control" id="title" placeholder = "Title of your topic"/>
                    </div>
                    <div class="form-group"><!-- check if description exceeds n words-->
                        <label for = "description">Enter a description for your topic:</label>
                        <textarea class = "form-control" placeholder = "Tell something about your topic!"></textarea>
                    </div>
                </div>
                <div class = "modal-footer no-padding" style = "border-top: none;">
                    <button type = "submit" class = "btn btn-primary" style = "margin: 10px;">Create Topic</button>
                </div>
            </form>
        </div>
    </div>
</div>
