<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Vue initializieren -->
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        
        <!-- Stylesheet laden -->
        <link rel="stylesheet" href="style/mystyle.css"/>

		<title>Baustelle</title>
	</head>
	<body>
        <!-- Header einblenden -->
		<div style="bottom: 5px;">
            <?php require "html/header.htm"; ?>
        </div>

        <!-- APP -->
		<div id="app">
            <!-- Spielplatz zum ausprobieren -->
            <div v-if="showStuff">
                <h4>Hier beginnt der Spa&szlig;</h4>
                <p>{{ sum(1, 2) }}</p>
                <p>{{ csum(1)(4) }}</p>
                <h4>Hier endet er</h4>
            </div>

            <!-- TODO Liste -->
            <div v-else-if="showToDo">
                <div>Meine ToDos:</div>
            </div>

            <!-- Dummy -->
            <div v-else>
                <div>I'm a Dummy-Bear</div>
            </div>
		</div>			  

        <!-- Footer einblenden -->
        <div class="footer">
            <?php require "html/footer.htm"; ?>
        </div>

        <!-- Vue laden -->
		<script src="js/vue.js"></script>
	</body>
</html>