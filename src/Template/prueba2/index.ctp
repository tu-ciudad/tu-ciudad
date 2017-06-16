
<style>
	body {
		background-color: inherit;
		text-decoration: inherit;
	}


i {
  font-size:18px;
}
  


.nav>li .count {
  position: absolute;
  top: 10%;
  right: 25%;
  font-size: 10px;
  font-weight: normal;
  background: rgba(41,200,41,0.75);
  color: rgb(255,255,255);
  line-height: 1em;
  padding: 2px 4px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 10px;
  border-radius: 10px;
}

.conmain {
	margin-top: 50px;
	margin-left: 50px;
	margin-right: 50px;
}
</style>
<link rel="stylesheet" href="css/dataTables.bootstrap.css">

<!-- Main -->
<div class="container-fluid conmain" >
  
  <!-- upper section -->
  <div class="row">
	<div class="col-sm-3">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
      <hr>
      
      <ul class="nav nav-stacked">
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-link"></i> Links</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-book"></i> Books</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
        <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
      </ul>
      
      <hr>
      
  	</div><!-- /span-3 -->
    <div class="col-sm-9">
      	
      <!-- column 2 -->	
       <h3><i class="glyphicon glyphicon-dashboard"></i> Bootply Dashboard</h3>  
            
       <hr>
      
	   <div class="row">
            <!-- center left-->	
         	<div class="col-md-7">
			 
                        <?= $this->element('submit-producto') ?>   
              
          	</div><!--/col-->
         
            <!--center-right-->
        	<div class="col-md-5">
              
                <ul class="nav nav-justified">
         			<li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-heart"></i></a></li>
         			<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
         			<li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
         			<li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span></a></li>
       			</ul>  
              
                <hr>
              
				<p>
                  This is a responsive dashboard-style layout that uses <a href="http://www.getbootstrap.com">Bootstrap 3</a>. You can use this template as a starting point to create something more unique.
                </p>
                <p>
                  Visit the Bootstrap Playground at <a href="http://www.bootply.com">Bootply</a> to tweak this layout, or discover 1000's of Bootstrap code examples and snippets.
                </p>
              
                <hr>
              
                <div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-plus"></i><br>
                    Service
                  </a>
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-cloud"></i><br>
                    Cloud
                  </a>
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-cog"></i><br>
                    Tools
                  </a>
                  <a href="#" class="btn btn-info col-sm-3">
                    <i class="glyphicon glyphicon-question-sign"></i><br>
                    Help
                  </a>
                </div>
              
			</div><!--/col-span-6-->
     
       </div><!--/row-->
  	</div><!--/col-span-9-->
    
  </div><!--/row-->
  <!-- /upper section -->
   <div id="page-inner"> 
               
        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Trident</td>
                                            <td>Internet Explorer 4.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.0</td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 5.5</td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 6</td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="center">7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="center">6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="center">1.9</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.1</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.2</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.2</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.3</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.4</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.4</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.5</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.6</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1.6</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.7</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Mozilla 1.8</td>
                                            <td>Win 98+ / OSX.1+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Seamonkey 1.1</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Gecko</td>
                                            <td>Epiphany 2.20</td>
                                            <td>Gnome</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.2</td>
                                            <td>OSX.3</td>
                                            <td class="center">125.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 1.3</td>
                                            <td>OSX.3</td>
                                            <td class="center">312.8</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 2.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">419.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>Safari 3.0</td>
                                            <td>OSX.4+</td>
                                            <td class="center">522.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>OmniWeb 5.5</td>
                                            <td>OSX.4+</td>
                                            <td class="center">420</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>iPod Touch / iPhone</td>
                                            <td>iPod</td>
                                            <td class="center">420.1</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Webkit</td>
                                            <td>S60</td>
                                            <td>S60</td>
                                            <td class="center">413</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.0</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 8.5</td>
                                            <td>Win 95+ / OSX.2+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.0</td>
                                            <td>Win 95+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.2</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 9.5</td>
                                            <td>Win 88+ / OSX.3+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera for Wii</td>
                                            <td>Wii</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Nokia N800</td>
                                            <td>N800</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td>Nintendo DS</td>
                                            <td class="center">8.5</td>
                                            <td class="center">C/A<sup>1</sup>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.1</td>
                                            <td>KDE 3.1</td>
                                            <td class="center">3.1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.3</td>
                                            <td>KDE 3.3</td>
                                            <td class="center">3.3</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>KHTML</td>
                                            <td>Konqureror 3.5</td>
                                            <td>KDE 3.5</td>
                                            <td class="center">3.5</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 4.5</td>
                                            <td>Mac OS 8-9</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.1</td>
                                            <td>Mac OS 7.6-9</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Tasman</td>
                                            <td>Internet Explorer 5.2</td>
                                            <td>Mac OS 8-X</td>
                                            <td class="center">1</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.1</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Misc</td>
                                            <td>NetFront 3.4</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Dillo 0.8</td>
                                            <td>Embedded devices</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Links</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Misc</td>
                                            <td>Lynx</td>
                                            <td>Text only</td>
                                            <td class="center">-</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>IE Mobile</td>
                                            <td>Windows Mobile 6</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Misc</td>
                                            <td>PSP browser</td>
                                            <td>PSP</td>
                                            <td class="center">-</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
         
  <!-- lower section -->
  <div class="row">
    
    <div class="col-md-12">
      <hr>
      <a href="#"><strong><i class="glyphicon glyphicon-list-alt"></i> Reports</strong></a>  
      <hr>    
    </div>
    <div class="col-md-8">
      
      <table class="table table-striped">
        <thead>
          <tr><th>Visits</th><th>ROI</th><th>Source</th><th>Description and Notes</th></tr>
        </thead>
        <tbody>
          <tr><td>45</td><td>2.45%</td><td>Direct</td><td>Sam sapien massa, aliquam in cursus ut, ullamcorper in tortor. 
          Aliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>289</td><td>56.2%</td><td>Referral</td><td>After RWD massa, aliquam in cursus ut, ullamcorper in tortor. 
          Aliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>98</td><td>25%</td><td>Type</td><td>Wil sapien massa, aliquam in cursus ut, ullamcorper in tortor. 
          Liquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>109</td><td>8%</td><td>..</td><td>Forfoot aliquam in cursus ut, ullamcorper in tortor. 
          Okma mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
          <tr><td>34</td><td>14%</td><td>..</td><td>Mikel sapien massa, aliquam in cursus ut, ullamcorper in tortor. 
          Maliquam mauris arcu, tristique a lobortis vitae, condimentum feugiat justo.</td></tr>
        </tbody>
      </table>
      
      <hr>              
      
 
      
      <div class="panel panel-default">
        <div class="panel-heading"><h4>New Requests</h4></div>
        <div class="panel-body">
          <div class="list-group">
            <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
            <a href="#" class="list-group-item">Dedicated server doesn't..</a>
            <a href="#" class="list-group-item">RHEL 6 install on new..</a>
          </div>
        </div>
      </div>
      
      <hr>
      
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        Please remember to <a href="#">Logout</a> for classified security.
      </div>

    
    </div>
    <div class="col-md-4">
      
      <ul class="nav nav-pills nav-stacked">
        <li class="nav-header"></li>
        <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
      </ul>
      
      <hr>
              
       <div class="panel panel-default">
                  <div class="panel-heading"><h4>Processing Status</h4></div>
                  <div class="panel-body">
                    
                    <small>Complete</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                      </div>
                    </div>
                    <small>In Progress</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <small>At Risk</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->       
      
      <div class="panel panel-default">
        <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
        <div class="panel-body">	
          <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
          <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
          <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
        </div>
      </div><!--/panel-->
    
    </div><!--/col-->
    
  </div><!--/row-->
  
</div><!--/container-->
<!-- /Main -->




<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->


</div>




<?= $this->element('footer') ?>

<script src="js/dataTables.bootstrap.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script>
	  $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

</script>