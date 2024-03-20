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

<div class="row">
    <div class=" d-flex justify-content-between">
        <h4 >
            <?php echo e($questionBank["name"]); ?> Soru Ekleme Sayfası
        </h4>
        <div>
            <button onclick="history.back();" type="button" class="btn btn-warning" style="color: beige"><i class="fa fa-mail-reply"></i></button>
        </div>
    </div>
    <form action="/questionbank/storequestion">
        <input type="hidden" name="questionbank_id" value="<?php echo e($id); ?>"/>
            <p>Sorunun Başlığını Ekleyiniz</p>
            <input type="text"  name="title" class="form-control" required>
            <p>A Şıkkını Giriniz</p>
            <div class="d-flex ">
                <div class="p-2"><input type="radio" name="correct" value="A" required></div>
                <input type="text" value="" name="A" class="form-control" required>
            </div>
            <p>B Şıkkını Giriniz</p>
            <div class="d-flex ">
                <div class="p-2"><input type="radio" name="correct" value="B" required></div>
                <input type="text" value="" name="B" class="form-control" required>
            </div>
            <p>C Şıkkını Giriniz</p>
            <div class="d-flex ">
                <div class="p-2"><input type="radio" name="correct" value="C" required></div>
                <input type="text" value="" name="C" class="form-control" required>
            </div>
            <p>D Şıkkını Giriniz</p>
            <div class="d-flex">
                <div class="p-2"><input type="radio" name="correct" value="D" required></div>
                <input type="text" value="" name="D" class="form-control" required>
            </div>
            <p>Konu Seçiniz</p>
            <select name="subject" value="" class="form-select" aria-label="Default select example" required>
                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option name="subject_id" value='<?php echo e($subject["id"]); ?>' ><?php echo e($subject["name"]); ?></option>                   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
        
        <div class="text-center">
            <button type="submit"  class="btn btn-success">Kaydet</button>
          </div>
      </form>


</div>

<script>
    var id =0;
    function clicksd(){
        id++;
        const choice = document.getElementById('choice');
        const input = document.createElement('input');
        input.name = `choice-${id}`;
        choice.appendChild(input);
    }
</script>
<script>
    $('#submit-btn').click(function () {
        $.ajax({
            url: '@Url.Action("Post","/question_new_add")',
            type: 'POST',
            dataType: 'json'
        })
    })
</script>
<style>
    input{
        flex-direction: column;
        margin: 2rem;
        float: bottom;
    }
    p{
        margin-left: 2rem;
    }
</style>


<script type="text/javascript">
        function view(id){
            console.log(id);
        }

</script>
            
<style>
    .btn{
        height: 2.5rem;
    }
    .form-select{
        margin: 2rem;

    }
    .row {
        margin-left: 5rem;
        margin-right: 5rem;
    }
    a {
        text-decoration: none;
        color:black;
    }
    .white_a{
        color: beige;
        padding: 5px;
        text-align: start;
    }
    
    

</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\classroom-management\resources\views/questionbank/question-add.blade.php ENDPATH**/ ?>