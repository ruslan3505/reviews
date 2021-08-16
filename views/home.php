<?php
include (ROOT. '/views/template/header.php');
?>
<?php
include (ROOT. '/views/template/tableFromDb.php');
?>



<style>
	 body { 
    margin-right: 25%; 
    margin-left: 25%; 
	}
</style>


<div>
<img width="250" height="180" src="https://content2.rozetka.com.ua/goods/images/big/163399632.jpg" class="rounded float-start">
<h4 align="center">Ноутбук Acer Aspire 3 A315-57G-336G</h4>
<div style="margin-left: 38%">
<h6>Описание:</h6>
<p>Воплощение идеальной формы и функциональности
Невероятно тонкий корпус и приятное на ощупь покрытие подчеркивают достоинства устройства.
<p>
Приятный на ощупь
Изысканное покрытие корпуса с узором из тонких линий обеспечивает приятные тактильные ощущения.
<p>
Точность управления
Сенсорная панель с технологией Precision Touchpad отличается потрясающей чувствительностью для более эффективной работы за ноутбуком.

</div>




<br><p>
<h4 align="center">Оставить отзыв о товаре</h4>

<script type="text/javascript" src="/js/reviews.js"></script>
<form action="addReview" method="POST" enctype="multipart/form-data">
<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control" id='email' name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label class="form-label">Полное имя</label>
  <input type="username" class="form-control" id='fullName' name="fullName" placeholder="Full name">
</div>
</div>



<!--==== Форма для оценки ====-->
<label class="form-label">Оцените товар</label>
<br>

  	<input type="radio" class="form-check-input" name="grade" id='grade' value="1" />1
    <input type="radio" class="form-check-input" name="grade" id='grade' value="2" />2
    <input type="radio" class="form-check-input" name="grade" id='grade' value="3" />3
    <input type="radio" class="form-check-input" name="grade" id='grade' value="4" />4
    <input type="radio" class="form-check-input" name="grade" id='grade' value="5" />5

<p>

<!--====Comment ====-->


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Добавьте комментарий</label>
  <textarea class="form-control" name="comment" id="comment" rows="3"></textarea>
</div>

<!--=== image ===-->

<input class="btn btn-light" type="file" id="image" name="image">


<p><br>

<button id="reviews" type="button" class="btn btn-secondary" />Отправить</button>
<input type="submit" id="button" value="Отправить" />
<br>

</form>

</div>
</div>



<!--======== Отзывы ========-->

<div class="container">
	<div class="row">
		<div class="col=lg-12">
			<h4 class="text-center">Отзывы пользователей</h4>
		</div>
	</div>
</div>

<?php foreach($reviews as $elem): ?>

<div>
 <div class="media-block">
<h5><ion-icon name="person-sharp" type="button"></ion-icon> <span id="user_name_<?php echo $elem['id']; ?>"><?php echo $elem['userName']; ?></span></h5>
<h6><?php echo $elem['grade'] ?><ion-icon name="star"></ion-icon></h6>
<div class="media-body">
 <div class="mar-btm">
 </div>
 <p style="margin-left: 31px;"><?php echo $elem['comment']; ?></p>
</div>
</div>
</div>
</p>
</p>


<hr>



<?php endforeach; ?>






<?php
include (ROOT. '/views/template/footer.php');
?>
