<table cellspacing="4" cellpadding="5" style="text-align: left;vertical-align:top;" id="table1" class="table table-stats table-bordered">
	<thead>
		<tr><th width="100px">Name</th><th with="300px">Value</th></tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<b>databaseID</b>
			</td>
			<td>
				<?php echo $mirnas[0]["databaseid"];?>
			</td>
		</tr>
		<tr>
			<td>
				<b>pubmedID</b>
			</td>
			<td>
				<a href= "http://www.ncbi.nlm.nih.gov/pubmed/<?php echo $mirnas[0]["Pubmed_ID"].'"'; ?>> <?php echo $mirnas[0]["Pubmed_ID"]; ?></a>
			</td>
		</tr>
		<tr>
			<td>
				<b>tissue</b>
			</td>
			<td>
				<?php echo $mirnas[0]["tissue"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>microRNAs</b>
			</td>
			<td>
				<?php echo $mirnas[0]["Name"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>miRBase</b>
			</td>
			<td>
				<a href="http://www.mirbase.org/cgi-bin/query.pl?terms=<?php echo $mirnas[0]["Name"].'"'; ?>><?php echo $mirnas[0]["Name"]; ?></a>
			</td>
		</tr>
		<tr>
			<td>
				<b>Main targets</b>
			</td>
			<td>
				<?php echo $mirnas[0]["Main_Target"]; ?>			
			</td>
		</tr>
		<tr>
			<td>
				<b>Main Pathways</b>
			</td>
			<td>
				<?php echo $mirnas[0]["Main_Pathway"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>miRNA function</b>
			</td>
			<td>
				<?php echo $mirnas[0]["Fucntion_"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>Expression</b>
			</td>
			<td>
				<?php echo $mirnas[0]["Expression"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				<b>Cancer Effect</b>
			</td>
			<td>
				<?php echo $mirnas[0]["Cancer_Effect"]; ?>
			</td>
		</tr>
	</tbody>
</table>