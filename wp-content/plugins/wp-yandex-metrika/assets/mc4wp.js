jQuery(function($) {
	const {counters} = window.wpym;

	if (typeof mc4wp === 'undefined') return;

	mc4wp.forms.on('subscribed', function(form, data, updated) {
		counters.forEach(counter => {
			ym(counter.number, 'reachGoal', 'ym-subscribe');
		});
	});
});
