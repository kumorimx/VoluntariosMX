<!-- BEGIN PROFILE SIDEBAR -->
<div class="profile-sidebar" style="width: 250px;">
	<!-- PORTLET MAIN -->
	<div class="portlet light profile-sidebar-portlet">
		<!-- SIDEBAR USERPIC -->
		<div class="profile-userpic">
			<img src="../../assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
		</div>
		<!-- END SIDEBAR USERPIC -->
		<!-- SIDEBAR USER TITLE -->
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">
				Logo Plataforma
			</div>
		</div>
		<!-- END SIDEBAR USER TITLE -->
		<!-- SIDEBAR BUTTONS -->
		<div class="profile-userbuttons">
			<button type="button" class="btn btn-circle green-haze btn-sm">Cambiar Logo</button>
		</div>
		<!-- END SIDEBAR BUTTONS -->
		<!-- SIDEBAR MENU -->
		<div class="profile-usermenu">
			<ul class="nav">
				<li class="">
					<a href="{{ route('adminConfig') }}">
					<i class="icon-home"></i>Contacto Plataforma</a>
				</li>
				<li>
					<a href="{{ route('adminConfigCategorias') }}">
					<i class="icon-list"></i>Categorias</a>
				</li>
				<li>
					<a href="{{ route('adminConfigIntereses') }}">
					<i class="icon-heart"></i>Intereses</a>
				</li>
				<li>
					<a href="{{ route('adminConfigLogros') }}">
					<i class="icon-trophy"></i>Logros</a>
				</li>
			</ul>
		</div>
		<!-- END MENU -->
	</div>
	<!-- END PORTLET MAIN -->
</div>
<!-- END BEGIN PROFILE SIDEBAR -->