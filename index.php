<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Algo</title>
	<style>
		table.sudoku {
			text-align: center;
			vertical-align: center;
		}
		table.sudoku td {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
		.red {
			color: red;
			font-weight: bold;
		}
	</style>
	<script src='jquery.js'></script>
</head>
<body>
		<table class="sudoku">
		<tr>
			<td data-x="0" data-y="0"></td>
			<td data-x="1" data-y="0"></td>
			<td data-x="2" data-y="0">4</td>
			<td data-x="3" data-y="0"></td>
			<td data-x="4" data-y="0"></td>
			<td data-x="5" data-y="0">6</td>
			<td data-x="6" data-y="0"></td>
			<td data-x="7" data-y="0"></td>
			<td data-x="8" data-y="0">7</td>
		</tr>
		<tr>
			<td data-x="0" data-y="1"></td>
			<td data-x="1" data-y="1"></td>
			<td data-x="2" data-y="1"></td>
			<td data-x="3" data-y="1">1</td>
			<td data-x="4" data-y="1"></td>
			<td data-x="5" data-y="1"></td>
			<td data-x="6" data-y="1">2</td>
			<td data-x="7" data-y="1"></td>
			<td data-x="8" data-y="1">5</td>
		</tr>
		<tr>
			<td data-x="0" data-y="2">1</td>
			<td data-x="1" data-y="2"></td>
			<td data-x="2" data-y="2">9</td>
			<td data-x="3" data-y="2">5</td>
			<td data-x="4" data-y="2"></td>
			<td data-x="5" data-y="2">7</td>
			<td data-x="6" data-y="2">4</td>
			<td data-x="7" data-y="2"></td>
			<td data-x="8" data-y="2">8</td>
		</tr>

		<tr>
			<td data-x="0" data-y="3">4</td>
			<td data-x="1" data-y="3"></td>
			<td data-x="2" data-y="3"></td>
			<td data-x="3" data-y="3"></td>
			<td data-x="4" data-y="3"></td>
			<td data-x="5" data-y="3"></td>
			<td data-x="6" data-y="3"></td>
			<td data-x="7" data-y="3">2</td>
			<td data-x="8" data-y="3"></td>
		</tr>
		<tr>
			<td data-x="0" data-y="4"></td>
			<td data-x="1" data-y="4"></td>
			<td data-x="2" data-y="4">2</td>
			<td data-x="3" data-y="4"></td>
			<td data-x="4" data-y="4">6</td>
			<td data-x="5" data-y="4"></td>
			<td data-x="6" data-y="4"></td>
			<td data-x="7" data-y="4">9</td>
			<td data-x="8" data-y="4">3</td>
		</tr>
		<tr>
			<td data-x="0" data-y="5">9</td>
			<td data-x="1" data-y="5"></td>
			<td data-x="2" data-y="5"></td>
			<td data-x="3" data-y="5">2</td>
			<td data-x="4" data-y="5"></td>
			<td data-x="5" data-y="5">3</td>
			<td data-x="6" data-y="5"></td>
			<td data-x="7" data-y="5"></td>
			<td data-x="8" data-y="5">6</td>
		</tr>

		<tr>
			<td data-x="0" data-y="6"></td>
			<td data-x="1" data-y="6">8</td>
			<td data-x="2" data-y="6">1</td>
			<td data-x="3" data-y="6"></td>
			<td data-x="4" data-y="6"></td>
			<td data-x="5" data-y="6"></td>
			<td data-x="6" data-y="6"></td>
			<td data-x="7" data-y="6">5</td>
			<td data-x="8" data-y="6"></td>
		</tr>
		<tr>
			<td data-x="0" data-y="7">7</td>
			<td data-x="1" data-y="7"></td>
			<td data-x="2" data-y="7">5</td>
			<td data-x="3" data-y="7">3</td>
			<td data-x="4" data-y="7"></td>
			<td data-x="5" data-y="7">2</td>
			<td data-x="6" data-y="7"></td>
			<td data-x="7" data-y="7"></td>
			<td data-x="8" data-y="7">4</td>
		</tr>
		<tr>
			<td data-x="0" data-y="8">6</td>
			<td data-x="1" data-y="8"></td>
			<td data-x="2" data-y="8"></td>
			<td data-x="3" data-y="8">9</td>
			<td data-x="4" data-y="8"></td>
			<td data-x="5" data-y="8"></td>
			<td data-x="6" data-y="8">1</td>
			<td data-x="7" data-y="8"></td>
			<td data-x="8" data-y="8"></td>
		</tr>
	</table>
</body>
<script>
	$(".sudoku tr td").each(function () {
		if ($(this).html() !== "") {
			$(this).addClass("red");
		}
	});
	var cells = [];
	$(".sudoku tr").each(function () {
		var line = [];
		cells.push(line);
		$(this).children("td").each(function () {
			var cell = {
				x: $(this).data("x"),
				y: $(this).data("y"),
				val: parseInt($(this).html())
			};
			line.push(cell);
		});
	});

	function check_horizontal(cells, cpt, cell) {
		// qui suis-je?
		return false;		
	}
	function check_vertical(cells, cpt, cell) {
		// qui suis-je?
		return false;		
	}
	function check_square(cells, cpt, cell) {
		// qui suis-je?
		return false;		
	}

	function check_existence(cells, cpt, cell) {
		return check_horizontal(cells, cpt, cell) || check_vertical(cells, cpt, cell) || check_square(cells, cpt, cell);
	}
	function set_value_of_cell(cells, cpt, cell) {
		var cell_html = $(".sudoku tr:nth-child(" + (cell.y + 1) + ") td:nth-child(" + (cell.x + 1) + ")");
		var value = cell_html.html();
		if (value === "") {
			for (; check_existence(cells, cpt, cell) !== false && cpt < 10; cpt++);
			if (cpt == 10) cpt = "&otimes;";
			cell.val = cpt;
			cell_html.html(cpt);
		}
	}
	function fill_cells_with_start(cells, cpt) {
		for (var a = 0; a < cells.length; a++) {
			for (var b = 0; b < cells[a].length; b++) {
				set_value_of_cell(cells, cpt, cells[a][b]);
			};
		};
	}
	fill_cells_with_start(cells, 1);

</script>
</html>