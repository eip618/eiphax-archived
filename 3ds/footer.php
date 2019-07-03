		<div class="footer">
			<div class="container">
				<div class="nav2">
					<ul>
						<li><a href="./privacy.php">Privacy</a>
						<li><a href="./signpost.php">Signpost</a></li>
						<li><a href="./issues.php">Troubleshooting</a></li>
						<li><a href="./donate.php">Donations</a></li>
						<li><a href="./contact.php">Contact</a></li>
						<li><a href="https://nx.eiphax.tech">Switch</a></li>
					</ul>
				</div>
			</div>
		</div>
		<script>
			document.querySelectorAll('.btn-toggle-visibility').forEach(function(currentToggleVisibilityButton) {
				currentToggleVisibilityButton.addEventListener('click', function () {
					document.querySelector(currentToggleVisibilityButton.getAttribute('data-target')).classList.toggle('hidden');
				});
			});
		</script>
	</body>
</html>
