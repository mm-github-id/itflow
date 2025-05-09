<div class="modal" id="bulkCloseTicketsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-fw fa-check mr-2"></i>Resolving Multiple Tickets</h5>
                <button type="button" class="close text-white" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body bg-white">

                <input type="hidden" name="bulk_private_note" value="0">

                <div class="form-group">
                    <textarea class="form-control tinymce" rows="5" name="bulk_details" placeholder="Enter closing remarks"></textarea>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label>Time worked</label>
                        <input class="form-control timepicker" id="time_worked" name="time" type="text" placeholder="HH:MM:SS" pattern="([01]?[0-9]|2[0-3]):([0-5]?[0-9]):([0-5]?[0-9])" value="00:01:00" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="bulkPrivateCheckbox" name="bulk_private_note" value="1">
                        <label class="custom-control-label" for="bulkPrivateCheckbox">Mark as Internal</label>
                        <small class="form-text text-muted">If checked this note will only be visible to agents. The contact / watcher will not be informed this ticket was resolved.</small>
                    </div>
                </div>

            </div>
            <div class="modal-footer bg-white">
                <button type="submit" name="bulk_resolve_tickets" class="btn btn-primary text-bold"><i class="fas fa-check mr-2"></i>Resolve</button>
                <button type="button" class="btn btn-light" data-dismiss="modal"><i class="fas fa-times mr-2"></i>Cancel</button>
            </div>
        </div>
    </div>
</div>
