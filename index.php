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
	</style>
	<script src='jquery.js'></script>
</head>
<body>
	<table class="sudoku">
		<tr>
			<td data-x="0" data-y="0"></td>
			<td data-x="1" data-y="0">5</td>
			<td data-x="2" data-y="0">9</td>
			<td data-x="3" data-y="0"></td>
			<td data-x="4" data-y="0">2</td>
			<td data-x="5" data-y="0"></td>
			<td data-x="6" data-y="0">4</td>
			<td data-x="7" data-y="0">6</td>
			<td data-x="8" data-y="0"></td>
		</tr>
		<tr>
			<td data-x="0" data-y="1">1</td>
			<td data-x="1" data-y="1"></td>
			<td data-x="2" data-y="1"></td>
			<td data-x="3" data-y="1">4</td>
			<td data-x="4" data-y="1"></td>
			<td data-x="5" data-y="1">3</td>
			<td data-x="6" data-y="1"></td>
			<td data-x="7" data-y="1"></td>
			<td data-x="8" data-y="1">8</td>
		</tr>
		<tr>
			<td data-x="0" data-y="2">3</td>
			<td data-x="1" data-y="2"></td>
			<td data-x="2" data-y="2"></td>
			<td data-x="3" data-y="2"></td>
			<td data-x="4" data-y="2">7</td>
			<td data-x="5" data-y="2"></td>
			<td data-x="6" data-y="2"></td>
			<td data-x="7" data-y="2"></td>
			<td data-x="8" data-y="2">2</td>
		</tr>

		<tr>
			<td data-x="0" data-y="3"></td>
			<td data-x="1" data-y="3">3</td>
			<td data-x="2" data-y="3"></td>
			<td data-x="3" data-y="3">8</td>
			<td data-x="4" data-y="3"></td>
			<td data-x="5" data-y="3">9</td>
			<td data-x="6" data-y="3"></td>
			<td data-x="7" data-y="3">2</td>
			<td data-x="8" data-y="3"></td>
		</tr>
		<tr>
			<td data-x="0" data-y="4">6</td>
			<td data-x="1" data-y="4"></td>
			<td data-x="2" data-y="4">5</td>
			<td data-x="3" data-y="4"></td>
			<td data-x="4" data-y="4">6</td>
			<td data-x="5" data-y="4"></td>
			<td data-x="6" data-y="4">3</td>
			<td data-x="7" data-y="4"></td>
			<td data-x="8" data-y="4">7</td>
		</tr>
		<tr>
			<td data-x="0" data-y="5"></td>
			<td data-x="1" data-y="5">1</td>
			<td data-x="2" data-y="5"></td>
			<td data-x="3" data-y="5">7</td>
			<td data-x="4" data-y="5"></td>
			<td data-x="5" data-y="5">6</td>
			<td data-x="6" data-y="5"></td>
			<td data-x="7" data-y="5">4</td>
			<td data-x="8" data-y="5"></td>
		</tr>

		<tr>
			<td data-x="0" data-y="6">2</td>
			<td data-x="1" data-y="6"></td>
			<td data-x="2" data-y="6"></td>
			<td data-x="3" data-y="6"></td>
			<td data-x="4" data-y="6">1</td>
			<td data-x="5" data-y="6"></td>
			<td data-x="6" data-y="6"></td>
			<td data-x="7" data-y="6"></td>
			<td data-x="8" data-y="6">4</td>
		</tr>
		<tr>
			<td data-x="0" data-y="7">9</td>
			<td data-x="1" data-y="7"></td>
			<td data-x="2" data-y="7"></td>
			<td data-x="3" data-y="7">3</td>
			<td data-x="4" data-y="7"></td>
			<td data-x="5" data-y="7">2</td>
			<td data-x="6" data-y="7"></td>
			<td data-x="7" data-y="7"></td>
			<td data-x="8" data-y="7">5</td>
		</tr>
		<tr>
			<td data-x="0" data-y="8"></td>
			<td data-x="1" data-y="8">7</td>
			<td data-x="2" data-y="8">8</td>
			<td data-x="3" data-y="8"></td>
			<td data-x="4" data-y="8">6</td>
			<td data-x="5" data-y="8"></td>
			<td data-x="6" data-y="8">2</td>
			<td data-x="7" data-y="8">3</td>
			<td data-x="8" data-y="8"></td>
		</tr>
	</table>
</body>
<script>
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
		for (var i = 0; i < cells.length; i++) {
			for (var j = 0; j < cells[i].length; j++) {
			 	if (cells[i][j].val == cpt && cells[i][j].x == cell.x) {
			 		return true;
			 	}
			 };
		};
		return false;		
	}
	function check_vertical(cells, cpt, cell) {
		for (var i = 0; i < cells.length; i++) {
			for (var j = 0; j < cells[i].length; j++) {
			 	if (cells[i][j].val == cpt && cells[i][j].y == cell.y) {
			 		return true;
			 	}
			 };
		};
		return false;		
	}
	function check_square(cells, cpt, cell) {
		var ox = cell.x % 3; 
		var oy = cell.y % 3;
		for (var y = cell.y - oy; y < cell.y + oy && y < cells.length; y++) {
			for (var x = cell.x - ox; x < cell.x + ox && x < cells[y].length; x++) {
			 	if (cells[y][x].val == cpt) {
			 		return true;
			 	}
			 };
		};
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