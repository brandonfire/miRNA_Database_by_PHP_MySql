				<div class="pagination">

					<?php $i = 0; ?>
					<?php while ($i < $total_pagenum) : ?>
						<?php $i += 1; ?>
						<?php if ($i == $current_page) : ?>
							<span><?php echo $i; ?></span>
						<?php else : ?>
							<a href="./result.php?name=<?php echo $name; ?>&tissue=<?php echo $tissue; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php endif; ?>
					<?php endwhile; ?>

				</div>