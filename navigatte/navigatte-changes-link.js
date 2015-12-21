//Module to compute link changes

Navigatte.Links.on("delete", function(link) {

	//Push the change to the change manager

	Navigatte.Changes.Add({ 
		id: link.sourceId + link.targetId,
		element: "link", 
		action: "delete",
		source_id: link.sourceId,
		target_id: link.targetId
	});
});

Navigatte.Links.on("create", function(link) {

	//Push the change to the change manager

	Navigatte.Changes.Add({ 
		id: link.sourceId + link.targetId,
		element: "link", 
		action: "create",
		source_id: link.sourceId,
		target_id: link.targetId
	});
});