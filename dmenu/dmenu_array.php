
/*
 DHTML Menu version 3.3.19
 Written by Andy Woolley
 Copyright 2002 (c) Milonic Solutions. All Rights Reserved.
 Please vist http://www.milonic.co.uk/menu or e-mail menu3@milonic.com
  */

//The following line is critical for menu operation, and MUST APPEAR ONLY ONCE. If you have more than one menu_array.js file rem out this line in subsequent files
menunum=0;menus=new Array();_d=document;
function addmenu(){menunum++;menus[menunum]=menu;}
function dumpmenus(){mt="<script language=javascript>";for(a=1;a<menus.length;a++){mt+=" menu"+a+"=menus["+a+"];"}mt+="<\/script>";_d.write(mt)}
//Please leave the above line intact. The above also needs to be enabled if it not already enabled unless this file is part of a multi pack.

////////////////////////////////////
// Editable properties START here //
////////////////////////////////////

// Special effect string for IE5.5 or above please visit http://www.milonic.co.uk/menu/filters_sample.php for more filters
if(navigator.appVersion.indexOf("MSIE 6.0")>0) {
	effect = "Fade(duration=0.2);Alpha(style=0,opacity=88);Shadow(color='#F778A1', Direction=135, Strength=5)"
} else {
	effect = "Shadow(color='#F778A1', Direction=135, Strength=5)" // Stop IE5.5 bug when using more than one filter
}

timegap=500				// The time delay for menus to remain visible
followspeed=5			// Follow Scrolling speed
followrate=40			// Follow Scrolling Rate
suboffset_top=0;		// Sub menu offset Top position 
suboffset_left=0;		// Sub menu offset Left position

style1=[				// style1 is an array of properties. You can have as many property arrays as you need. This means that menus can have their own style.
"000000",				// Mouse Off Font Color
"FF9797",				// Mouse Off Background Color
"FFFFFF",				// Mouse On Font Color
"004400",				// Mouse On Background Color
"000000",				// Menu Border Color 
19,						// Font Size in pixels
"normal",				// Font Style (italic or normal)
"normal",				// Font Weight (bold or normal)
"MS Sans Serif",		// Font Name
9,						// Menu Item Padding
"18.gif",		// Sub Menu Image (Leave this blank if not needed)
10,						// 3D Border & Separator bar
"FFFF88",				// 3D High Color
"006400",				// 3D Low Color
"Purple",				// Current Page Item Font Color (leave this blank to disable)
"pink",					// Current Page Item Background Color (leave this blank to disable)
"21.gif",	// Top Bar image (Leave this blank to disable)
"96FFFF",				// Menu Header Font Color (Leave blank if headers are not needed)
"FFDCDC",				// Menu Header Background Color (Leave blank if headers are not needed)
]

style2=[				// style1 is an array of properties. You can have as many property arrays as you need. This means that menus can have their own style.
"000000",				// Mouse Off Font Color
"FFE6EB",				// Mouse Off Background Color
"ffff00",				// Mouse On Font Color
"000040",				// Mouse On Background Color
"ffffff",				// Menu Border Color 
18,						// Font Size in pixels
"normal",				// Font Style (italic or normal)
"normal",				// Font Weight (bold or normal)
"MS Sans Serif",		// Font Name
8,						// Menu Item Padding
"10.gif",		// Sub Menu Image (Leave this blank if not needed)
5,						// 3D Border & Separator bar
"FFFF88",				// 3D High Color
"006400",				// 3D Low Color
"Purple",				// Current Page Item Font Color (leave this blank to disable)
"FF1493",					// Current Page Item Background Color (leave this blank to disable)
"16.gif",	// Top Bar image (Leave this blank to disable)
"ffffff",				// Menu Header Font Color (Leave blank if headers are not needed)
"000099",				// Menu Header Background Color (Leave blank if headers are not needed)
]

addmenu(menu=[		// This is the array that contains your menu properties and details
"mainmenu",			// Menu Name - This is needed in order for the menu to be called
0,				// Menu Top - The Top position of the menu in pixels
0,				// Menu Left - The Left position of the menu in pixels
252,				// Menu Width - Menus width in pixels
5,					// Menu Border Width 
"",					// Screen Position - here you can use "center;left;right;middle;top;bottom" or a combination of "center:middle"
style1,				// Properties Array - this is set higher up, as above
1,					// Always Visible - allows the menu item to be visible at all time (1=on/0=off)
"center",			// Alignment - sets the menu elements text alignment, values valid here are: left, right or center
effect,				// Filter - Text variable for setting transitional effects on menu activation - see above for more info
0,					// Follow Scrolling - Tells the menu item to follow the user down the screen (visible at all times) (1=on/0=off)
1, 					// Horizontal Menu - Tells the menu to become horizontal instead of top to bottom style (1=on/0=off)
,					// Keep Alive - Keeps the menu visible until the user moves over another menu or clicks elsewhere on the page (1=on/0=off)
,					// Position of TOP sub image left:center:right
,					// Set the Overall Width of Horizontal Menu to 100% and height to the specified amount (Leave blank to disable)
,					// Right To Left - Used in Hebrew for example. (1=on/0=off)
,					// Open the Menus OnClick - leave blank for OnMouseover (1=on/0=off)
,					// ID of the div you want to hide on MouseOver (useful for hiding form elements)
,					// Reserved for future use
,					// Reserved for future use
,					// Reserved for future use

// "Description Text","URL", "Alternate URL", "Status", "Separator Bar"
// Main menu
,"36 pyramid","show-menu=education",,"",1      
,"64 northwind","show-menu=entertain",,"",1
,"about me","show-menu=me",,"",1
,"mysql_update","show-menu=m",,"",1
,"การศึกษา","show-menu=mm",,"",1
])

addmenu(menu=["education",,,200,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"Pyramid1-6","show-menu=m1",,,1
,"Pyramid7-12","show-menu=m2",,,1
,"Pyramid13-18","show-menu=m3",,,1
,"Pyramid19-24","show-menu=m4",,,1
,"Pyramid25-30","show-menu=m5",,,1
,"Pyramid31-36","show-menu=m6",,,1
])

addmenu(menu=["mm",,,200,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"Nation","https://www.nation.ac.th/index.php/th/ target=_blank",,,1
,"Namuenpittaykom","http://www.nm.ac.th/ target=_blank",,,1
])

addmenu(menu=["m",,,200,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"Categories","Categories.php target=_blank",,,1
,"Customers","Customers.php target=_blank",,,1
,"Employees","Employees.php target=_blank",,,1
,"Orderdetails","Orderdetails.php target=_blank",,,1
,"Orders","Orders.php target=_blank",,,1
,"Products","Products.php target=_blank",,,1
,"Shippers","Shippers.php target=_blank",,,1
,"Suppliers","Suppliers.php target=_blank",,,1
])

addmenu(menu=["me",,,200,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"Facebook","https://www.facebook.com/mim.suchicha target=_blank",,,1
,"Twitter","https://twitter.com/mymimmmm1 target=_blank",,,1
,"Youtube","https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber target=_blank",,,1
,"Github","https://github.com/mim321 target=_blank",,,1
,"Blogger","https://www.blogger.com/profile/08386590285757223122 target=_blank",,,1
])
	
addmenu(menu=["entertain",,,250,1,"",style1,0,"left",effect,,,,,,,,,,,,
,"Products","show-menu=1m",,,1
,"Categories","show-menu=2m",,,1
,"Employees","show-menu=3m",,,1
,"Customers","show-menu=4m",,,1
,"Suppliers","show-menu=5m",,,1
,"Orders","show-menu=6m",,,1
,"Orderdetails","show-menu=7m",,,1
,"Shippers","show-menu=8m",,,1
])

addmenu(menu=["m1",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pyramid1","mim_1.php  target=_blank",,,1
,"Pyramid2","mim_2.php target=_blank",,,1
,"Pyramid3","mim_3.php target=_blank",,,1
,"Pyramid4","mim_4.php target=_blank",,,1
,"Pyramid5","mim_5.php target=_blank",,,1
,"Pyramid6","mim_6.php target=_blank",,,1
])

addmenu(menu=["m2",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pyramid7","mim_7.php  target=_blank",,,1
,"Pyramid8","mim_8.php target=_blank",,,1
,"Pyramid9","mim_9.php target=_blank",,,1
,"Pyramid10","mim_10.php target=_blank",,,1
,"Pyramid11","mim_11.php target=_blank",,,1
,"Pyramid12","mim_12.php target=_blank",,,1
])

addmenu(menu=["m3",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pyramid13","mim_13.php  target=_blank",,,1
,"Pyramid14","mim_14.php target=_blank",,,1
,"Pyramid15","mim_15.php target=_blank",,,1
,"Pyramid16","mim_16.php target=_blank",,,1
,"Pyramid17","mim_17.php target=_blank",,,1
,"Pyramid18","mim_18.php target=_blank",,,1
])

addmenu(menu=["m4",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pyramid19","mim_18.php  target=_blank",,,1
,"Pyramid20","mim_19.php target=_blank",,,1
,"Pyramid21","mim_21.php target=_blank",,,1
,"Pyramid22","mim_22.php target=_blank",,,1
,"Pyramid23","mim_23.php target=_blank",,,1
,"Pyramid24","mim_24.php target=_blank",,,1
])

addmenu(menu=["m5",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pyramid25","mim_25.php  target=_blank",,,1
,"Pyramid26","mim_26.php target=_blank",,,1
,"Pyramid27","mim_27.php target=_blank",,,1
,"Pyramid28","mim_28.php target=_blank",,,1
,"Pyramid29","mim_29.php target=_blank",,,1
,"Pyramid30","mim_30.php target=_blank",,,1
])

addmenu(menu=["m6",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pyramid31","mim_31.php  target=_blank",,,1
,"Pyramid32","mim_32.php target=_blank",,,1
,"Pyramid33","mim_33.php target=_blank",,,1
,"Pyramid34","mim_34.php target=_blank",,,1
,"Pyramid35","mim_35.php target=_blank",,,1
,"Pyramid36","mim_36.php target=_blank",,,1
])

addmenu(menu=["1m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Pro_s0","pro_s0index.php  target=_blank",,,1
,"Pro_s1","pro_s1connect.php target=_blank",,,1
,"Pro_s2","pro_s2crtdb.php target=_blank",,,1
,"Pro_s3","pro_s3select.php target=_blank",,,1
,"Pro_s4","pro_s4insert.php target=_blank",,,1
,"Pro_s5","pro_s5delete.php target=_blank",,,1
,"Pro_s6","pro_s6update.php target=_blank",,,1
,"Pro_s7","pro_s7drop.php target=_blank",,,1
])

addmenu(menu=["2m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Cate_s0","cate_s0index.php  target=_blank",,,1
,"Cate_s1","cate_s1connect.php target=_blank",,,1
,"Cate_s2","cate_s2crtdb.php target=_blank",,,1
,"Cate_s3","cate_s3select.php target=_blank",,,1
,"Cate_s4","cate_s4insert.php target=_blank",,,1
,"Cate_s5","cate_s5delete.php target=_blank",,,1
,"Cate_s6","cate_s6update.php target=_blank",,,1
,"Cate_s7","cate_s7drop.php target=_blank",,,1
])

addmenu(menu=["4m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Cus_s0","cus_s0index.php  target=_blank",,,1
,"Cus_s1","cus_s1connect.php target=_blank",,,1
,"Cus_s2","cus_s2crtdb.php target=_blank",,,1
,"Cus_s3","cus_s3select.php target=_blank",,,1
,"Cus_s4","cus_s4insert.php target=_blank",,,1
,"Cus_s5","cus_s5delete.php target=_blank",,,1
,"Cus_s6","cus_s6update.php target=_blank",,,1
,"Cus_s7","cus_s7drop.php target=_blank",,,1
])

addmenu(menu=["3m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Emp_s0","emp_s0index.php  target=_blank",,,1
,"Emp_s1","emp_s1connect.php target=_blank",,,1
,"Emp_s2","emp_s2crtdb.php target=_blank",,,1
,"Emp_s3","emp_s3select.php target=_blank",,,1
,"Emp_s4","emp_s4insert.php target=_blank",,,1
,"Emp_s5","emp_s5delete.php target=_blank",,,1
,"Emp_s6","emp_s6update.php target=_blank",,,1
,"Emp_s7","emp_s7drop.php target=_blank",,,1
])

addmenu(menu=["5m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Sup_s0","sup_s0index.php  target=_blank",,,1
,"Sup_s1","sup_s1connect.php target=_blank",,,1
,"Sup_s2","sup_s2crtdb.php target=_blank",,,1
,"Sup_s3","sup_s3select.php target=_blank",,,1
,"Sup_s4","sup_s4insert.php target=_blank",,,1
,"Sup_s5","sup_s5delete.php target=_blank",,,1
,"Sup_s6","sup_s6update.php target=_blank",,,1
,"Sup_s7","sup_s7drop.php target=_blank",,,1
])

addmenu(menu=["6m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Ord_s0","ord_s0index.php  target=_blank",,,1
,"Ord_s1","ord_s1connect.php target=_blank",,,1
,"Ord_s2","ord_s2crtdb.php target=_blank",,,1
,"Ord_s3","ord_s3select.php target=_blank",,,1
,"Ord_s4","ord_s4insert.php target=_blank",,,1
,"Ord_s5","ord_s5delete.php target=_blank",,,1
,"Ord_s6","ord_s6update.php target=_blank",,,1
,"Ord_s7","ord_s7drop.php target=_blank",,,1
])

addmenu(menu=["7m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Ordd_s0","ordd_s0index.php  target=_blank",,,1
,"Ordd_s1","ordd_s1connect.php target=_blank",,,1
,"Ordd_s2","ordd_s2crtdb.php target=_blank",,,1
,"Ordd_s3","ordd_s3select.php target=_blank",,,1
,"Ordd_s4","ordd_s4insert.php target=_blank",,,1
,"Ordd_s5","ordd_s5delete.php target=_blank",,,1
,"Ordd_s6","ordd_s6update.php target=_blank",,,1
,"Ordd_s7","ordd_s7drop.php target=_blank",,,1
])

addmenu(menu=["8m",,,250,1,"",style2,,"left",effect,0,,,,,,,,,,,
,"Ship_s0","ship_s0index.php  target=_blank",,,1
,"Ship_s1","ship_s1connect.php target=_blank",,,1
,"Ship_s2","ship_s2crtdb.php target=_blank",,,1
,"Ship_s3","ship_s3select.php target=_blank",,,1
,"Ship_s4","ship_s4insert.php target=_blank",,,1
,"Ship_s5","ship_s5delete.php target=_blank",,,1
,"Ship_s6","ship_s6update.php target=_blank",,,1
,"Ship_s7","ship_s7drop.php target=_blank",,,1
])

		
dumpmenus()
