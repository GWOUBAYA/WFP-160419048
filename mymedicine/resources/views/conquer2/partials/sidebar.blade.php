 <div class="page-sidebar-wrapper">
     <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->
         <!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
         <ul class="page-sidebar-menu">
             <li class="sidebar-toggler-wrapper">
                 <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                 <div class="sidebar-toggler">
                 </div>
                 <div class="clearfix">
                 </div>
                 <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
             </li>
             <li class="sidebar-search-wrapper">
                 <form class="search-form" role="form" action="index.html" method="get">
                     <div class="input-icon right">
                         <i class="icon-magnifier"></i>
                         <input type="text" class="form-control" name="query" placeholder="Search...">
                     </div>
                 </form>
             </li>
             <li class="start active ">
                 <a href="index.html">
                     <i class="icon-home"></i>
                     <span class="title">Dashboard</span>
                     <span class="selected"></span>
                 </a>
             </li>
             <li>
                 <a href="javascript:;">
                     <i class="icon-puzzle"></i>
                     <span class="title">Report</span>
                     <span class="arrow "></span>
                 </a>
                 <ul class="sub-menu">
                     <li>
                         <a href="{{ url('/query1table/1')  }}">
                             <i class="icon-anchor"></i>
                             Report 1</a>
                     </li>
                     <li>
                         <a href="{{ url('/query1table/2') }}">
                             <i class="icon-anchor"></i>
                             Report 2</a>
                     </li>
                     <li>
                         <a href="{{ url('/query2table/1') }}">
                             <i class="icon-anchor"></i>
                             Report 3</a>
                     </li>
                     <li>
                         <a href="{{ url('/aggregatequery/1') }}">
                             <i class="icon-anchor"></i>
                             Report 4</a>
                     </li>
                     <li>
                         <a href="{{ url('/aggregatequery/2') }}">
                             <i class="icon-anchor"></i>
                             Report 5</a>
                     </li>
                     <li>
                         <a href="{{ url('/aggregatequery/3') }}">
                             <i class="icon-anchor"></i>
                             Report 6</a>
                     </li>
                     <li>
                         <a href="{{ url('/aggregatequery/4') }}">
                             <i class="icon-anchor"></i>
                             Report 7</a>
                     </li>
                     <li>
                         <a href="{{ url('/aggregatequery/5') }}">
                             <i class="icon-anchor"></i>
                             Report 8</a>
                     </li>
                     <li>
                         <a href="{{ url('/aggregatequery/6') }}">
                             <i class="icon-anchor"></i>
                             Report 9</a>
                     </li>
                 </ul>
             </li>
         </ul>
     </div>
 </div>
