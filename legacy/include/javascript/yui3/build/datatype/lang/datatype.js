/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */YUI.add("lang/datatype-date-format",function(a){a.Intl.add("datatype-date-format","",{a:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],A:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],b:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],B:["January","February","March","April","May","June","July","August","September","October","November","December"],c:"%Y-%m-%dT%H:%M:%S%z",p:["AM","PM"],P:["am","pm"],x:"%Y-%m-%d",X:"%H:%M:%S"});},"3.3.0");YUI.add("lang/datatype-date",function(a){},"3.3.0",{use:["lang/datatype-date-format"]});YUI.add("lang/datatype",function(a){},"3.3.0",{use:["lang/datatype-date"]});