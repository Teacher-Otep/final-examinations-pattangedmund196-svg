function showSection(sectionID){
    const sections = document.querySelectorAll('.content');
    const home = document.getElementById('home');

    sections.forEach(section => section.style.display = 'none');
    home.style.display = 'none';

    const activeSection = document.getElementById(sectionID);
    if(activeSection){
        activeSection.style.display = 'block';
    }

    // LOAD DATA
    if(sectionID === 'read'){
        loadStudents();
    }

    if(sectionID === 'update'){
        loadStudentsForUpdate();
    }

    if(sectionID === 'delete'){
        loadStudentsForDelete();
    }
}

function loadStudents(){
    fetch('../includes/read.php')
    .then(res => res.text())
    .then(data => {
        document.getElementById('studentTable').innerHTML = data;
    });
}

function loadStudentsForUpdate(){
    fetch('../includes/read.php')
    .then(res => res.text())
    .then(data => {

        // 👉 gawing SELECT button
        data = data.replace(/Edit/g, "Select");
        data = data.replace(/editStudent/g, "selectStudent");

        document.getElementById('updateTable').innerHTML = data;
    });
}

function loadStudentsForDelete(){
    fetch('../includes/read.php')
    .then(res => res.text())
    .then(data => {

        // 👉 gawing DELETE button
        data = data.replace(/Edit/g, "Delete");
        data = data.replace(/editStudent/g, "deleteStudent");

        document.getElementById('deleteTable').innerHTML = data;
    });
}

// 👉 SELECT STUDENT (UPDATE)
function selectStudent(id, surname, name, middlename, address, contact){
    document.getElementById('update_id').value = id;
    document.getElementById('u_surname').value = surname;
    document.getElementById('u_name').value = name;
    document.getElementById('u_middlename').value = middlename;
    document.getElementById('u_address').value = address;
    document.getElementById('u_contact').value = contact;
}

// 👉 UPDATE
function updateStudent(){
    const id = document.getElementById('update_id').value;
    const surname = document.getElementById('u_surname').value;
    const name = document.getElementById('u_name').value;
    const middlename = document.getElementById('u_middlename').value;
    const address = document.getElementById('u_address').value;
    const contact = document.getElementById('u_contact').value;

    fetch('../includes/update.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `id=${id}&surname=${surname}&name=${name}&middlename=${middlename}&address=${address}&contact=${contact}`
    })
    .then(res => res.text())
    .then(data => {
        alert(data);
        loadStudentsForUpdate();
    });
}

// 👉 DELETE
function deleteStudent(id){
    if(!confirm("Delete this student?")) return;

    fetch('../includes/delete.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'id=' + id
    })
    .then(res => res.text())
    .then(data => {
        alert(data);
        loadStudentsForDelete();
    });
}

// 👉 HOME
function goHome(){
    const sections = document.querySelectorAll('.content');
    sections.forEach(section => section.style.display = 'none');
    document.getElementById('home').style.display = 'block';
}

// 👉 ON LOAD
window.onload = function(){
    const sections = document.querySelectorAll('.content');
    sections.forEach(section => section.style.display = 'none');

    document.getElementById('home').style.display = 'block';

    const clrBtn = document.getElementById("clrbtn");
    if (clrBtn) {
        clrBtn.addEventListener("click", function(){
            document.querySelector("#create form").reset();
        });
    }
};