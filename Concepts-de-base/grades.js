let nbrOfGrades = 2;

const AddButton = document.querySelector(".btn-outline-secondary");

AddButton.addEventListener("click", () => {
  NewGrade = `
    <div class="mt-1 d-flex align-items-center gap-2">
            <label for="Grade" class="form-label">Grade ${nbrOfGrades} . </label>
            <input type="number" name="Grades[]"  class="form-control w-50" >
            <i class="bi bi-trash" ></i>
    </div>
    `;
  nbrOfGrades += 1;

  document.querySelector(".list-of-grades").innerHTML += NewGrade;
});

document
  .querySelector(".list-of-grades")
  .addEventListener("click", function (e) {
    if (e.target.classList.contains("bi")) {
      let rowToRemove = e.target.parentElement;

      e.target.parentElement.remove();
      html = document.querySelector(".list-of-grades").innerHTML;
      html = html.replace(rowToRemove.innerHTML, "");
      document.querySelector(".list-of-grades").innerHTML = html;
        nbrOfGrades -= 1;
    }
  });