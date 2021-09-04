<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAchinTest</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <form id="myForm" enctype="multipart/form-data">
        <input type="text" id="name" placeholder="name" required>
        <input type="email" id="email" placeholder="Enter Email" required>
        <input type="number" id="mobile" placeholder="Enter Phone No." required>
        <input accept="image/*" type='file' id="imgInp" required />
        <button type="submit"> Submit</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>Phone No</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody id="myTable">

        </tbody>
    </table>

</body>
<script>
    var s_no = 0;
    var image = "";
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            let url = URL.createObjectURL(file);
            image = ` <img src="${url}" width="100px" height="100px"/>`
        }
    }
    $('#myForm').submit(function(e) {
        e.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let mobile = $('#mobile').val();
        s_no++;

        $('#myTable').append(
            `<tr><td>${s_no}</td>
            <td>${name}</td>
            <td>${email}</td>
            <td>${mobile}</td>
            <td>${image}</td></tr>`);

        $('#name').val(``);
        $('#email').val(``);
        $('#mobile').val(``);
        $('#imgInp').val(``);

    });
</script>

</html>
