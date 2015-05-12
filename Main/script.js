//Database to hold report objects
var reports = new Array();
var ID, name, phone, email, department, request, custom_request, summary, details, priority, date, time, duration, admin_priority;
//TEST: all of the following arrays are test report data
var test_names = ['Peter Gregory','Rade Kuruc','Jaimie Dickson','Marta Prancho','Mia Cai','Goranka Gaechesca'];
var test_phones = ['905-525-9140','905-525-9140','905-525-9140','905-525-9140','905-525-9140','905-525-9140'];
var test_emails = ['gregp@mcmaster.ca','kurucr@mcmaster.ca','jdickso@mcmaster.ca','mprancho@mcmaster.ca','caimi@mcmaster.ca','gacesag@mcmaster.ca'];
var test_departments = ['Residence Admissions','Residence Admissions','Residence Admissions','Residence Admissions','Residence Admissions','Residence Admissions'];
var test_requests = ['Other','Other','Other','Other','Other','Other'];
var test_customs= ['test','test','test','test','test','test'];
var test_summaries = ['Sample Report','Sample Report','Sample Report','Sample Report','Sample Report','Sample Report'];
var test_details = ['test','test','test','test','test','test'];
var test_priorities = [0,1,1,0,2,2];
var test_dates = ['04/01/2015','04/01/2015','04/01/2015','04/01/2015','04/01/2015','04/01/2015'];
var test_times = ['8:30 AM','8:30 AM','8:30 AM','8:30 AM','8:30 AM','8:30 AM'];

//Report ADT
function report(id,na,ph,em,dep,req,cus,summ,det,pri,dat,tim,dur,adm){
    this.ID = id;
    this.name = na;
    this.phone = ph;
    this.email = em;
    this.department = dep;
    this.request = req;
    this.custom_request = cus;
    this.summary = summ;
    this.details = det;
    this.priority = pri;
    this.date = dat;
    this.time = tim;
    this.duration = "-";
    this.admin_priority = "-";
}

//Pushes report objects into database (array for now)
function databaseBuilder(){
    for(var i=0;i<6;i++){
        reports.push(new report(hash(i),test_names[i],test_phones[i],test_emails[i],test_departments[i],test_requests[i],test_customs[i],test_summaries[i],test_details[i],test_priorities[i],test_dates[i],test_times[i]));
        console.log(reports[i].ID); //TEST: check hashes for consistency and no duplicates
    }
    console.log("Database Build Complete!"); //TEST
}

//Table row builder
function rowBuilder(){
    var temp_priority;
    //Add an entry in the panel for each report
    for(var i=0;i<reports.length;i++){
        //Determine priority in a client-understandable form
        switch(reports[i].priority){
            case 0:
                temp_priority = "Low";
                break;
            case 1:
                temp_priority = "Medium";
                break;
            case 2:
                temp_priority = "High";
                break;
            default:
                temp_priority = "Error";
        }
        $(".main-panel > tbody").append('<tr><td class="report-elements report-id">' + reports[i].ID + '</td><td class="report-elements report-title">' + reports[i].summary + '</td><td class="report-elements report-date">' + reports[i].date + '</td><td class="report-elements report-duration">' + reports[i].duration + '</td><td class="report-elements report-urgency">' + temp_priority + '</td><td class="report-elements report-tools"><button class="btn btn-default view">View</button>&nbsp&nbsp<button class="btn btn-danger delete">Delete</button></td></tr>');
    }
    //TODO: Place following two things in a separate function
    //Detailed Report Modal View for View Button
    $(".report-tools .view").attr("data-toggle","modal");
    $(".report-tools .view").attr("data-target","#full-info");
    //TEST: Bind a click event to the 'View' button (Customize all fields for the exact report that was clicked)
    $(".view").on("click", function (){
        //TEST
        //console.log($(this).parent().parent().index());
        var temp_index = $(this).parent().parent().index();
        $("#full-info-title").text("#" + reports[temp_index].ID + " " + reports[temp_index].summary);
        $(".full-info-text.name").text(reports[temp_index].name);
        $(".full-info-text.phone").text(reports[temp_index].phone);
        $(".full-info-text.email").text(reports[temp_index].email);
        $(".full-info-text.department").text(reports[temp_index].department);
        $(".full-info-text.request").text(reports[temp_index].request);
        $(".full-info-text.date").text(reports[temp_index].date);
        $(".full-info-text.details").text(reports[temp_index].details);
        $(".full-info-text.priority").text(temp_priority);
        $(".full-info-text.time").text(reports[temp_index].time);
    });
}

//ID Hashing Function
function hash(n){
    return n + Math.floor((Math.random()*100)+1);
}

//Clear button of the new Report formn
$("#newReport_clear").click(function(){
    $("#newReport_name").val('');
    $("#newReport_phone").val('');
    $("#newReport_email").val('');
    $("#newReport_department").val('');
    $("#newReport_requestCategory").val('');
    $("#newReport_otherRequest").val('');
    $("#newReport_summary").val('');
    $("#newReport_details").val('');
    $('input[name="priority"]').prop('checked', false);
    $('#newReport_date').val('');
    $('#newReport_time').val('');
});


// Functions to execute upon page load
$(document).ready(function (){
    //New Report Modal View for Report button
    $("#report").attr("data-toggle","modal");
    $("#report").attr("data-target","#file-new-report");
    //Datedropper
    $("#newReport_date").dateDropper();
    //Build database
    databaseBuilder();
    //TODO: Build table row
    rowBuilder();
    //TODO: Build reports list
});