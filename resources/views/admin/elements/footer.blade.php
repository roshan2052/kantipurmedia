<!--**********************************
	Footer start
***********************************-->

<div class="footer">
	<div class="copyright">
		@if(config('Site.copyright'))
			<p>{!! config('Site.copyright') !!}</p>
		@else
			<p>{{ __('Copyright Text') }}</p>
		@endif
	</div>
</div>

<!--**********************************
	Footer end
***********************************-->