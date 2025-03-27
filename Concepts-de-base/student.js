function getGradeClass(grade) {
  if (grade > 10) return "list-group-item-success";
  if (grade == 10) return "list-group-item-warning"; 
  return "list-group-item-danger"; 
}

function displayGrades(grades) {
  let list = document.getElementById("gradesList");
  let total = 0;

  grades.forEach((grade) => {
    let li = document.createElement("li");
    li.className = `list-group-item ${getGradeClass(grade)}`;
    li.textContent = grade;
    list.appendChild(li);
    total += grade;
  });

  let avg = (total / grades.length).toFixed(2);
  document.getElementById("average").textContent = avg;
}
