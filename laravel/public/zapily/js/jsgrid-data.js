/*Jsgrid Init*/
$(function() {
	"use strict";
	
    $("#jsgrid_1").jsGrid({
        height: "450px",
        width: "100%",
 
        filtering: true,
        editing: true,
        sorting: true,
        paging: true,
        autoload: true,
 
        pageSize: 15,
        pageButtonCount: 5,
 
        deleteConfirm: "Do you really want to delete the client?",
 
        controller: db,
 
        fields: [
            { name: "Username", type: "text", width: 150 },
            { name: "Kelamin", type: "select", items: db.kelamin, valueField: "Id", textField: "Name" },
            { name: "Address", type: "text", width: 200 },
            { name: "User", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { type: "control" }
        ]
    });
 
});