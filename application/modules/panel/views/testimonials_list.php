<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<style>
.container {
    width: 70%;
    position: absolute;
    z-index: -1;
    top: 10%;
    left: 25%;
}

.sidebar .toggle {
    display: none !important;
}

@media (max-width:1075px) {
    .sidebar .toggle {
        display: block !important;
    }
}

@media (max-width:450px) {
    .container {
        top: 20%;
        width: 20%;
        left: 15%;
    }

    .top_bar {
        width: 120% !important;
        position: absolute !important;
    }
}

.table {
    width: 100%;
    border-collapse: collapse;

}

.table th,
.table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
}

.dataTables_wrapper .dataTables_paginate {
    float: right; 
    cursor: pointer;
}

.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter {
    display: inline-block; /* Align length and search input inline */
    margin-right: 10px; /* Add some space between them */
}

.dataTables_wrapper .dataTables_filter input {
    width: auto; /* Adjust the width of the search input */
}
</style>

<body>
    <div class="container mt-5">
        <h3 class="text-center mb-3">TESTIMONIAL LIST</h3>
        <div class="d-flex">

        </div>

        <table class="table">

            <?php if ($this->session->flashdata('product_succ')) { ?>
            <div class="alert alert-success text-center" id="delete_succ">
                <?php echo $this->session->flashdata('product_succ'); ?>

            </div>
            <?php } ?>
            <?php if ($this->session->flashdata('product_err')) { ?>
            <div class="alert alert-danger text-center" id="delete_err">
                <?php echo $this->session->flashdata('product_err'); ?>
            </div>
            <?php } ?>
            <thead>
                <tr>
                    <th class="text-center col">Testimonial Name</th>
                    <th class="text-center col">Testimonial Image</th>
                    <th class="text-center col">Others</th>
                    <th class="text-center col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($test as $test) { ?>
                <tr>
                    
                    <td class="text-center"><?php echo $test['t_name'] ?></td>
                  
                    <td class="text-center"><?php echo $test['t_image'] ?></td>
                    <td class="text-center"><?php echo $test['t_others'] ?></td>
                    <td class="text-center">
                        <a href="<?php echo base_url("view_testimonial_details/{$test['t_id']}") ?>"
                            class="btn btn-primary mt-2"><i class="fa-solid fa-eye"></i></a>
                        <a href="<?php echo base_url("delete_testimonial/{$test['t_id']}") ?>" id="delete"
                            class="btn btn-danger mx-3 mt-2"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script>
    $(document).ready(function() {

        if ($("#delete_succ").length) {
            $('#delete_succ').removeClass('d-none');
            setTimeout(() => {
                $('#delete_succ').addClass('d-none');
            }, 3000);
        }


        if ($("#delete_err").length) {
            $('#delete_err').removeClass('d-none');
            setTimeout(() => {
                $('#delete_err').addClass('d-none');
            }, 3000);
        }

    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $("#category").change(function() {
        $("#category_options").click();
    });

    $(".table").DataTable({
    "language": {
        "paginate": {
            "first": '<button class="btn btn-primary">First</button> ',
            "last": '<button class="btn btn-primary">Last</button> ',
            "next": '<button class="btn btn-primary">Next</button> ',
            "previous": '<button class="btn btn-primary">Previous</button> '
        }
    },
    
    "dom": '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>' + 
           '<"row"<"col-sm-12"tr>>' + 
           '<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
    
    "pagingType": "full_numbers" 
});
    </script>

</body>

</html>