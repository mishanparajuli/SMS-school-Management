const searchByFaculty = () =>{
    let faculty = document.getElementById('faculty').value;

    var myTable = document.getElementById('myTable');
    var tr = myTable.getElementsByTagName('tr');
    for(var i=1; i<tr.length; i++){
        var td = tr[i].getElementsByTagName('td')[2];
        if(td){
            var textValue = td.textContent;
            if(textValue == faculty){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }
    }

    }
    const searchByName = () =>{
    let name = document.getElementById('name').value.toUpperCase();

    var myTable = document.getElementById('myTable');
    var tr = myTable.getElementsByTagName('tr'); 
    for(var i=1; i<tr.length; i++){
        var td = tr[i].getElementsByTagName('td')[1];
        if(td){
            var textValue = td.textContent;
            if(textValue.toUpperCase().indexOf(name) > -1){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none"; 
            }
        }
    }

    }

