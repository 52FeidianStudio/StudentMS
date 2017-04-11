$(function(){

	var grade=$("#grade option:selected").val();
	var clas=$("#class option:selected").val();
	var place=$("#place option:selected").val();
	init();
	$("#grade").change(function()
		{
			grade=$("#grade option:selected").text();
		})
	$("#class").change(function()
		{
			clas=$("#class option:selected").text();
		})
	$("#place").change(function()
		{
			place=$("#place option:selected").text();
		})
	$("#sure").click(function()
	{
		//console.log(grade+"	"+clas+"	"+place);
		var key=grade+":"+clas+":"+place;
		$.ajax({
			type: "get",
			url: "../Student/getcname",
			data:"key="+key,
			error:function(){
			alert("Show Dormitory Error!!!");
			},
			success:function(data){
				result=data.split(":");
				$.each(result,function(n,value){
				if(value!=null&&value!=0&&value!="=>")
				{
				$('#class').append('<option value="' + n + '">' + value + '</option>');
				}
				})
			},
			})
	})
});
function init()
{
	$.ajax({
			type: "get",
			url: "../Student/getcname",
			error:function(){
			alert("Class Init Error!!!");
			},
			success:function(data){
				result=data.split(":");
				$('#class').append('<option value="' + 0 + '">' + 'NoSelect' + '</option>');
				$.each(result,function(n,value){
				if(value!=null&&value!=0&&value!="=>")
				{
				$('#class').append('<option value="' + n + '">' + value + '</option>');
				}
				})
			},
			})
	$.ajax({
			type: "get",
			url: "../Student/getplace",
			error:function(){
			alert("Department Init Error!!!");
			},
			success:function(data){
				result=data.split(":");
				//console.log(result);
				$('#place').append('<option value="' + 0 + '">' + 'NoSelect' + '</option>');
				$.each(result,function(n,value){
				if(value!=null&&value!=0&&value!="=>")
				{
				$('#place').append('<option value="' + n + '">' + value + '</option>');
				}
				})
			},
			})
	$.ajax({
			type: "get",
			url: "../Student/getgrade",
			error:function(){
			alert("Grade Init Error!!!");
			},
			success:function(data){
				result=data.split(":");
				//console.log(result);
				$('#grade').append('<option value="' + 0 + '">' + 'NoSelect' + '</option>');
				$.each(result,function(n,value){
				if(value!=null&&value!=0&&value!="=>")
				{
				$('#grade').append('<option value="' + n + '">' + value + '</option>');
				}
				})
			},
			})
}