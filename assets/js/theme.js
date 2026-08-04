document.addEventListener('DOMContentLoaded', function () {
	const navLinks = document.querySelectorAll('a[href^="#"]');
	for (const link of navLinks) {
		link.addEventListener('click', function (event) {
			const targetId = this.getAttribute('href');
			if (!targetId || targetId === '#') {
				return;
			}
			const target = document.querySelector(targetId);
			if (target) {
				event.preventDefault();
				target.scrollIntoView({ behavior: 'smooth', block: 'start' });
			}
		});
	}
});
