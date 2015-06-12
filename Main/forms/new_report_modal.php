<?php ?>


<!--New Report Filing modal-->
    <div class="modal fade newReport" id="file-new-report" tabindex="-1" role="dialog" aria-labelledby="newReport-title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" id="newReport_close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="newReport-title">New Report</h4>
                </div>
                <div class="modal-body">
                    <form class="grid-form" id="newReport">
                        <fieldset>
                            <div data-row-span="3">
                                <div data-field-span="1">
                                    <label>Name</label>
                                    <input type="text" minlength="1" maxlength="22" placeholder="Peter Gregory" id="newReport_name" required>
                                </div>
                                <div data-field-span="1">
                                    <label>Phone</label>
                                    <input type="text" maxlength="19" placeholder="902-525-9140 x55555" id="newReport_phone" required>
                                </div>
                                <div data-field-span="1">
                                    <label>Email</label>
                                    <input type="text" maxlength="28" placeholder="gregp@mcmaster.ca" id="newReport_email" required>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div data-row-span="4">
                                <div data-field-span="1">
                                    <label>Department</label>
                                    <select id="newReport_department">
                                        <option value="blank" selected="selected"></option>
                                        <option value="Residence Admissions" title="Residence Admissions">Res Admissions</option>
                                        <option value="Res Life" title="Residence Life">Res Life</option>
                                        <option value="Res Facilities" title="Residence Facilities">Res Facilities</option>
                                        <option value="NQ Service Centre" title="North Quad Service Centre">NQ Service Centre</option>
                                        <option value="WQ Service Centre" title="West Quad Service Centre">WQ Service Centre</option>
                                        <option value="Conference Services" title="Conference & Event Services">Conference Services</option>
                                    </select>
                                </div>
                                <div data-field-span="1">
                                    <label>Request Category</label>
                                    <select id="newReport_requestCategory">
                                        <option value="blank" selected="selected"></option>
                                        <option value="PC Issues" title="PC Issues">PC Issue (Slow, Malware etc)</option>
                                        <option value="PC Setup" title="PC Setup">PC Setup</option>
                                        <option value="Printer Setup" title="Printer Setup">Printer Setup</option>
                                        <option value="Printer Issue" title="Printer Issues">Printer Issue</option>
                                        <option value="Internet/Network Issues" title="Network Issues">Internet/Network Issues</option>
                                        <option value="Shared Drives" title="Shared Drive Setup">Shared Drives</option>
                                        <option value="Other" title="Other">Other</option>
                                    </select>
                                </div>
                                <div data-field-span="2">
                                    <label>If Other, please specify</label>
                                    <input type="text" id="newReport_otherRequest" maxlength="48" disabled>
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="4">
                                    <label>Report Summary (60 characters max)</label>
                                    <input type="text" id="newReport_summary" minlength="10" maxlength="60" required>
                                </div>
                            </div>
                            <div data-row-span="4">
                                <div data-field-span="4">
                                    <label>Details (500 characters max)</label>
                                    <textarea rows="2" cols="20" name="report_details" wrap="hard" maxlength="500" style="resize:none;height:130px" id="newReport_details"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div data-row-span="2">
                                <div data-field-span="1" id="newReport_priority">
                                    <label>Priority For You</label>
                                    <form>
                                        <input type="radio" name="priority" value="Low" title="Whenever possible."><img src="assets/icons/green-flag.png" title="Whenever possible.">
                                        <input type="radio" name="priority" value="Medium" title="As soon as possible."><img src="assets/icons/orange-flag.png" title="As soon as possible.">
                                        <input type="radio" name="priority" value="High" title="Urgent!"><img src="assets/icons/red-flag.png" title="Urgent!">
                                    </form>
                                </div>
                                <div data-field-span="1" id="newReport_meetingTime">
                                    <label>When are you free?</label>
                                    <input type="text" placeholder="mm/dd/yyyy" id="newReport_date">
                                    <input type="text" placeholder="2:30 PM or 'anytime'" id="newReport_time">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" id="newReport_progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                    </div>
                    <em id="newReport_infoMsg">All fields are required, except details.&nbsp</em>
                    <button class="btn btn-default" id="newReport_clear">Clear</button>
                    <button class="btn btn-success btn-lg" id="newReport_submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    
 