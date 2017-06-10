<style>
	/*********************************tabla-horarios*************************************/
.place-schedule {
    margin-bottom: 1em;
    /box-shadow: 1px 1px #ccc;
    border-radius: 0.25rem; 
    
}

@media screen and (max-width: 767px) {
    .place-schedule {
        
    }
}

.place-schedule .schedule-tab {
    border: 1px solid #eee
}

.place-schedule .schedule-tab .nav-tabs {
    border: 0;
    background-color: #eee;
    padding: 0 15px
}

@media screen and (max-width: 767px) {
    .place-schedule .schedule-tab .nav-tabs {
        padding: 0
    }
}

.place-schedule .schedule-tab .nav-tabs li {
    padding: 0;
    margin: 0;
    border: 0;
    font-size: 14px;
    width: 1%;
    display: table-cell
}

@media screen and (max-width: 767px) {
    .place-schedule .schedule-tab .nav-tabs li {
        font-size: 1em
    }
}

.place-schedule .schedule-tab .nav-tabs li.active a {
    color: #1d96c5;
    border: 0;
    background-color: inherit;
    border-bottom: 2px solid #1d96c5
}

.place-schedule .schedule-tab .nav-tabs li a {
    padding: 8px 0px;
    margin: 0px;
    display: block;
    border: 0;
    border-radius: 0;
    color: #555
}

.place-schedule .schedule-tab .nav-tabs li a:hover {
    color: #1d96c5
}

.place-schedule .schedule-tab .nav-tabs li a span {
    display: inline-block
}

.place-schedule .schedule-tab .nav-tabs li a span.is-mobile {
    display: none
}

@media screen and (max-width: 767px) {
    .place-schedule .schedule-tab .nav-tabs li a span {
        display: none
    }
    .place-schedule .schedule-tab .nav-tabs li a span.is-mobile {
        display: inline-block
    }
}

.place-schedule .tab-content {
    padding: 4px;
    text-align: center
}

.place-schedule .tab-content .tab-pane .day-label {
    font-size: 13px;
    font-weight: 400;
    margin-bottom: 8px;
    margin-top: 4px;
    text-transform: uppercase
}

.place-schedule .tab-content .tab-pane .schedule {
    padding-top: 10px;
    padding-bottom: 10px
}

.place-schedule .tab-content .tab-pane .schedule.divider:nth-of-type(1) {
    border-right: 1px solid #eee
}

@media screen and (max-width: 767px) {
    .place-schedule .tab-content .tab-pane .schedule.divider:nth-of-type(1) {
        border-right: 0
    }
}

.place-schedule .tab-content .tab-pane .schedule span.time {
    font-size: 16px
}

.place-schedule .tab-content .tab-pane .schedule-group {
    padding-bottom: 8px
}

.place-schedule .tab-content .tab-pane .schedule-group:nth-of-type(1) {
    border-right: 1px solid #eee
}

@media screen and (max-width: 767px) {
    .place-schedule .tab-content .tab-pane .schedule-group:nth-of-type(1) {
        border-right: 0
    }
}

.place-schedule .tab-content .tab-pane .schedule-group .schedule {
    width: 100%;
    padding-top: 2px;
    padding-bottom: 2px
}

.infoComponent {
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-weight: 300;
    color: #23232f;
    margin: 1em auto 0em
}

.infoComponent hr {
    border-color: #dddcdd;
    margin: 0;
    width: 100%
}

.infoComponent ul.top-info {
    margin-top: 12px;
    padding: 0
}

.infoComponent ul.top-info li {
    text-align: center;
    line-height: 1.4em;
    font-size: 1.1em;
    margin-bottom: 10px
}

.infoComponent ul.top-info li.callToAction a:link {
    font-size: 0.8em;
    display: initial
}
.col-centered{
    float: none;
    margin: 0 auto;
}
/************************************fin-tabla-horarios************************************/
</style>
<div class='col-md-12 col-centered' >
<div class='place-schedule'>
<div class='schedule-tab' role='tabpanel'>
<ul class='nav nav-tabs nav-justified' role='tablist'>
<li role='presentation'  name="Monday">
<a aria-controls='tab-day-0' data-toggle='tab' href='#tab-day-0' role='tab'>
<span>
Lun
</span>
<span class='is-mobile'>
L
</span>
</a>
</li>
<li role='presentation' name="Tuesday">
<a aria-controls='tab-day-1' data-toggle='tab' href='#tab-day-1' role='tab'>
<span>
Mar
</span>
<span class='is-mobile'>
M
</span>
</a>
</li>
<li role='presentation' name="Wednesday">
<a aria-controls='tab-day-2' data-toggle='tab' href='#tab-day-2' role='tab'>
<span>
Mié
</span>
<span class='is-mobile'>
M
</span>
</a>
</li>
<li role='presentation' name="Thursday">
<a aria-controls='tab-day-3' data-toggle='tab' href='#tab-day-3' role='tab'>
<span>
Jue
</span>
<span class='is-mobile'>
J
</span>
</a>
</li>
<li  role='presentation' name="Friday">
<a aria-controls='tab-day-4' data-toggle='tab' href='#tab-day-4' role='tab'>
<span>
Vie
</span>
<span class='is-mobile'>
V
</span>
</a>
</li>
<li role='presentation' name="Saturday">
<a aria-controls='tab-day-5' data-toggle='tab' href='#tab-day-5' role='tab'>
<span>
Sáb
</span>
<span class='is-mobile'>
S
</span>
</a>
</li>
<li role='presentation' name="Sunday">
<a aria-controls='tab-day-6'  }' data-toggle='tab' href='#tab-day-6' role='tab'>
<span>
Dom-Fes
</span>
<span class='is-mobile'>
D-F
</span>
</a>
</li>
</ul>
 
<div class='tab-content row'>
<div class='tab-pane' id='tab-day-0' role='tabpanel'>
<div class='schedule'>
<span class='fa fa-clock-o fa-lg'></span>
<span class='time'>
08:00 am a 5:30 pm
</span>
</div>
</div>
<div class='tab-pane' id='tab-day-1' role='tabpanel'>
<div class='schedule'>
<span class='fa fa-clock-o fa-lg'></span>
<span class='time'>
08:00 am a 5:30 pm
</span>
</div>
</div>
<div class='tab-pane' id='tab-day-2' role='tabpanel'>
<div class='schedule'>
<span class='fa fa-clock-o fa-lg'></span>
<span class='time'>
08:00 am a 5:30 pm
</span>
</div>
</div>
<div class='tab-pane' id='tab-day-3' role='tabpanel'>
<div class='schedule'>
<span class='fa fa-clock-o fa-lg'></span>
<span class='time'>
08:00 am a 5:30 pm
</span>
</div>
</div>
<div class='active tab-pane' id='tab-day-4' role='tabpanel'>
<div class='schedule'>
<span class='fa fa-clock-o fa-lg'></span>
<span class='time'>
08:00 am a 5:30 pm
</span>
</div>
</div>
<div class='tab-pane' id='tab-day-5' role='tabpanel'>
<div class='schedule'>
<span class='fa fa-clock-o fa-lg'></span>
<span class='time'>
08:00 am a 2:00 pm
</span>
</div>
</div>
<div class='tab-pane' id='tab-day-6' role='tabpanel'>
<div class='schedule col-xs-12'>
<span class='fa fa-clock-o fa-lg'></span>
Cerrado
</div>
</div>
</div>
</div>
</div>
</div>

