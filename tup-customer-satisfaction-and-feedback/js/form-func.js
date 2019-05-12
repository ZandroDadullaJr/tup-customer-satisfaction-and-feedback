 $(function() {
     var bindDatePicker = function() {
         $(".date").datetimepicker({
             format: 'YYYY-MM-DD',
             icons: {
                 time: "fa fa-clock-o",
                 date: "fa fa-calendar",
                 up: "fa fa-arrow-up",
                 down: "fa fa-arrow-down"
             }
         }).find('input:first').on("blur", function() {
             // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
             // update the format if it's yyyy-mm-dd
             var date = parseDate($(this).val());

             if (!isValidDate(date)) {
                 //create date based on momentjs (we have that)
                 date = moment().format('YYYY-MM-DD');
             }

             $(this).val(date);
         });
     }

     var isValidDate = function(value, format) {
         format = format || false;
         // lets parse the date to the best of our knowledge
         if (format) {
             value = parseDate(value);
         }

         var timestamp = Date.parse(value);

         return isNaN(timestamp) == false;
     }

     var parseDate = function(value) {
         var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
         if (m)
             value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

         return value;
     }

     bindDatePicker();
 });


 // SUBMIT FUNCTIONS

 var fname, lname, email, contact, company, office, employee, date

 function el_val(id) {
     var value = document.getElementById(id).value;
     return value;
 }

 function validate() {
     var val_fname = el_val("firstname");
     var val_lname = el_val("lastname");
     var val_email = el_val("email");
     var val_contact = el_val("contact");
     var val_company = el_val("company");
     var val_office = el_val("office");
     var val_employee = el_val("employeeName");
     var val_date = el_val("date");
     var val_comment = el_val("comment");
     var radios = document.getElementsByName('feedback');
     var criteria1 = document.getElementsByName('criteria1');
     var criteria2 = document.getElementsByName('criteria2');
     var criteria3 = document.getElementsByName('criteria3');
     var criteria4 = document.getElementsByName('criteria4');
     var criteria5 = document.getElementsByName('criteria5');
     var formValid = false;

     var dataArr = [
         [val_fname, val_lname, val_email, val_contact, val_company],
         [val_office, val_employee, val_date],
         [],
         "1",
         val_comment
     ];

     if (val_fname == "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "First Name must be filled out",
         });
         // alert("First Name must be filled out");
         return false;
     }
     if (val_lname == "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Last Name must be filled out",
         });
         // alert("Last Name must be filled out");
         return false;
     }
     if (val_email === "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Email must be filled out",
         });
         // alert("Email must be filled out");
         return false;
     }
     if (val_contact === "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Contact Number must be filled out",
         });
         // alert("Contact Number must be filled out");
         return false;
     }
     if (val_contact != "") {
         if (isNaN(val_contact)) {
             Swal.fire({
                 type: "error",
                 title: "Invalid Input",
                 text: "Input must be a number",
             });
             // alert("Input is not valid!");
             return false;
         }

     }
     if (val_company == "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Company must be filled out",
         });
         // alert("Company must be filled out");
         return false;
     }
     if (val_office == "Office Being Rated") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Office must be selected",
         });
         // alert("Office must be filled out");
         return false;
     }
     if (val_employee == "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Employee must be filled out",
         });
         // alert("Employee must be filled out");
         return false;
     }
     if (val_date == "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Date must be filled out",
         });
         // alert("Date must be filled out");
         return false;
     }

     // Criteria 1
     formValid = false;
     for (var i = 0, length = criteria1.length; i < length; i++) {
         if (criteria1[i].checked == "1") {
             // do whatever you want with the checked radio
             dataArr[2][0] = criteria1[i].value;
             formValid = true;
             break;
         }
     }

     if (false == formValid) {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Please select a Rating",
         });
         // alert("Please select a Feedback");
         return false;
     }

     // Criteria 2
     formValid = false;
     for (var i = 0, length = criteria2.length; i < length; i++) {
         if (criteria2[i].checked == "1") {
             // do whatever you want with the checked radio
             dataArr[2][1] = criteria2[i].value;
             formValid = true;
             break;
         }
     }

     if (false == formValid) {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Please select a Rating",
         });
         // alert("Please select a Feedback");
         return false;
     }

     // Criteria 3
     formValid = false;
     for (var i = 0, length = criteria3.length; i < length; i++) {
         if (criteria3[i].checked == "1") {
             // do whatever you want with the checked radio
             dataArr[2][2] = criteria3[i].value;
             formValid = true;
             break;
         }
     }

     if (false == formValid) {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Please select a Rating",
         });
         // alert("Please select a Feedback");
         return false;
     }

     // Criteria 4
     formValid = false;
     for (var i = 0, length = criteria4.length; i < length; i++) {
         if (criteria4[i].checked == "1") {
             // do whatever you want with the checked radio
             dataArr[2][3] = criteria4[i].value;
             formValid = true;
             break;
         }
     }

     if (false == formValid) {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Please select a Rating",
         });
         // alert("Please select a Feedback");
         return false;
     }

     // Criteria 5
     formValid = false;
     for (var i = 0, length = criteria5.length; i < length; i++) {
         if (criteria5[i].checked == "1") {
             // do whatever you want with the checked radio
             dataArr[2][4] = criteria5[i].value;
             formValid = true;
             break;
         }
     }

     if (false == formValid) {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Please select a Rating",
         });
         // alert("Please select a Feedback");
         return false;
     }

     // Feedback
     formValid = false;
     for (var i = 0, length = radios.length; i < length; i++) {
         if (radios[i].checked == "1") {
             // do whatever you want with the checked radio
             dataArr[3] = radios[i].value;
             formValid = true;
             break;
         }
     }

     if (false == formValid) {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Please select a Feedback",
         });
         // alert("Please select a Feedback");
         return false;
     }

     if (val_comment == "") {
         Swal.fire({
             type: "error",
             title: "Error",
             text: "Comment must be filled out",
         });
         // alert("Comment must be filled out");
         return false;
     }

     if (dataArr) {
         return dataArr;
     }

     return false;

 }

 function submit() {
     dataArr = validate();
     console.log(dataArr);
     if (dataArr) {
         axios.get(`php/insertdata.php?arr=${JSON.stringify(dataArr)}`)
             .then(res => {
                 if (res.data == "success") {
                     Swal.fire({
                         type: "success",
                         title: "Success!",
                         text: "Thank you for Evaluating!"
                     }).then(res1 => {
                         window.location.reload();
                     })
                 }else {
                     Swal.fire({
                         type: "error",
                         title: "Error",
                         text: "Server did not respond!!"
                     })
                 }

             })

         .catch(err => {
             Swal.fire({
                 type: "error",
                 title: "Database Error!",
                 text: "Server did not respond!!!"
             })
         })
     } else {
         return false;
     }
 }