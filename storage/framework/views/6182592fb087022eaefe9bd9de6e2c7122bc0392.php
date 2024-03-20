<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php $__env->startSection('content'); ?>
<form method="get" action="/lesson/add">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-8">
            <input type="text" class="form-control" id="course" value="Ders Ekle" name="course" />
        </div>
        <div class="col-md-4 p-2 position-relative">
            <button id="submit-btn" type="submit" class="btn btn-primary position-absolute end-0">Ekle</button>
        </div>
    </div>
</form>
<div class="container-table">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">İd</th>
                <th scope="col">Dersin Adı</th>
                <th scope="col">Oluşturlma Tarihi</th>
                <th scope="col">Eylemler</th>


            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                ?>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row">
                <?php echo e($i++); ?></td>
                <td><?php echo e($course["id"]); ?></td>
                <td><?php echo e($course["name"]); ?></td>
                <td><?php echo e($course["created_at"]); ?></td>
                <th scope="col">
                    <div>
                        <a href='/lesson/delete/<?php echo e($course["id"]); ?>'>
                            <i class="fa fa-trash"></i>
                        </a>

                    <a href='/subject/<?php echo e($course["id"]); ?>'>
                        <i class="fa fa-eye"></i>
                    </a>
                    </div>


                </th>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end mr-1">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            <?php for($i = 1; $i <= $page; $i++): ?>
                <li class="page-item <?php echo e($active === $i ? 'active' : ''); ?>">
                    <a class="page-link" href="?active=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>

            <li class="page-item">
                <a class="page-link" href="?active=<?php echo e(($active + 1)); ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>




</div>

<script type="text/javascript">
        function view(id){
            console.log(id);
        }

</script>

            <style>

                .col{
                    text-align: center;
                }
                .row {
                        margin-left: 10rem;
                        margin-right: 10rem;

                    }
                    i {
                        margin-left: 1rem;

                        margin-right: 1rem;

                    }

                    .button {
                        margin-right: 0cm;
                    }

                    .container-table {
                        margin-left: 5rem;
                        margin-right: 5rem;
                        /* width: 250rem; */
                        border: solid 1px;
                    }a {
     text-decoration: none;
     color:black;
    }

            </style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\classroom-management\resources\views/lesson/lesson.blade.php ENDPATH**/ ?>