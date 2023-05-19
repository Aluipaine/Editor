/**
 * Creates a new row for the 'hole_set' table with 10 columns of input fields.
 * Each input field has the same name and class ('marko__holeparameter' and 'lineinput' respectively)
 */
function marko__createnewrow_holes() {
  const newrow = document.createElement("tr");
  newrow.innerHTML = `
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__holeparameter" value="" class="lineinput"></td>
  `;
  document.querySelector("#hole_set > table").append(newrow);
}
/**
 * Creates a new row for the 'morehole_set' table with 5 columns of input fields and checkboxes.
 * Each input field and checkbox has the same name and class ('marko__moreholeparameter' and 'lineinput' respectively)
 */
function marko__createnewrow_morehole() {
  const newrow = document.createElement("tr");
  newrow.innerHTML = `
    <td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="text" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="checkbox" name="marko__moreholeparameter" value="" class="lineinput"></td>
    <td><input type="checkbox" name="marko__moreholeparameter" value="" class="lineinput"></td>
  `;
  document.querySelector("#morehole_set > table").append(newrow);
}