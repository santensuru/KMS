				<!-- body -->
				<div class="col-md-5">
					<h3></h3>
					<!-- <h3>Tanya Jawab</h3>
					<div id="colm2">
						<h3>Tanya Jawab</h3>
					</div> -->
					<div id="faq">
						<ul id="basics" class="cd-faq-group">
<?php foreach ($faq->result() as $row)
	{
?>
							<li>
								<a class="cd-faq-trigger" href="#0"><?= $row->Pertanyaan ?></a>
								<div class="cd-faq-content" id="tab">
									<p><?= $row->Jawaban ?></p>
								</div>
							</li>
<?php
	}
?>
							<!-- <li>
								<a class="cd-faq-trigger" href="#0">How do I change my password?</a>
								<div class="cd-faq-content" id="tab">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae quidem blanditiis delectus corporis, possimus officia sint sequi ex tenetur id impedit est pariatur iure animi non a ratione reiciendis nihil sed consequatur atque repellendus fugit perspiciatis rerum et. Dolorum consequuntur fugit deleniti, soluta fuga nobis. Ducimus blanditiis velit sit iste delectus obcaecati debitis omnis, assumenda accusamus cumque perferendis eos aut quidem! Aut, totam rerum, cupiditate quae aperiam voluptas rem inventore quas, ex maxime culpa nam soluta labore at amet nihil laborum? Explicabo numquam, sit fugit, voluptatem autem atque quis quam voluptate fugiat earum rem hic, reprehenderit quaerat tempore at. Aperiam.</p>
								</div>
							</li>

							<li>
								<a class="cd-faq-trigger" href="#0">How do I sign up?</a>
								<div class="cd-faq-content" id="tab">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi cupiditate et laudantium esse adipisci consequatur modi possimus accusantium vero atque excepturi nobis in doloremque repudiandae soluta non minus dolore voluptatem enim reiciendis officia voluptates, fuga ullam? Voluptas reiciendis cumque molestiae unde numquam similique quas doloremque non, perferendis doloribus necessitatibus itaque dolorem quam officia atque perspiciatis dolore laudantium dolor voluptatem eligendi? Aliquam nulla unde voluptatum molestiae, eos fugit ullam, consequuntur, saepe voluptas quaerat deleniti. Repellendus magni sint temporibus, accusantium rem commodi?</p>
								</div>
							</li>

							<li>
								<a class="cd-faq-trigger" href="#0">Can I remove a post?</a>
								<div class="cd-faq-content" id="tab">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
								</div>
							</li>

							<li>
								<a class="cd-faq-trigger" href="#0">How do reviews work?</a>
								<div class="cd-faq-content" id="tab">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis provident officiis, reprehenderit numquam. Praesentium veritatis eos tenetur magni debitis inventore fugit, magnam, reiciendis, saepe obcaecati ex vero quaerat distinctio velit.</p>
								</div>
							</li> -->
						</ul> <!-- cd-faq-group -->
					</div>
				</div>
			</div>
		</div>
