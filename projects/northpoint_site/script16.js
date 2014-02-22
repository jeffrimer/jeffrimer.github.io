$(document).ready(function() {
	$("tr").mouseover(function() {
		$(this).addClass("over");
	});
	$("tr").mouseout(function() {
		$(this).removeClass("over");
	});
	$("tr:even").addClass("even");
	$("#theTable").tablesorter({
		sortlist: [[1,0]],
		cssAsc: "sortUp",
		cssDesc: "sortDown",
		widgets: ["zebra"]
	});
});