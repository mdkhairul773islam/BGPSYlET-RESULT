<div class="col-md-9">
    <div class="row">       
		<div class="single teacher_table">
		    <h3>All Book List</h3>
			<table>
				<thead>
					<tr>
						<th>SL</th>
						<th>Book Name</th>
						<th>Author Name</th>
						<th>Publication</th>
					</tr>
				</thead>
				<tbody>
				    <?php foreach ($library as $key => $library) {?>
				     <tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $library->book_name; ?></td>
						<td><?php echo $library->author_name; ?></td>
						<td><?php echo $library->publication; ?></td>
					 </tr>
					 <?php } ?>
				</tbody>
			</table>
		</div>
    </div>
</div>