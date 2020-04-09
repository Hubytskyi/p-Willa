document.addEventListener("DOMContentLoaded", function() {

	const menuList = document.querySelector('.menu__list')
	const menuBtn = document.querySelector('.mobile-menu__btn')
	const menuListItem = document.querySelectorAll('.menu__list-item')
	const menuLinkMobOpen = document.querySelectorAll('.menu__list--submenu')
	const subMenuListMob = document.querySelectorAll('.submenu__list')

	// __ Start Menu work and animation __
	let menuOpen = false
	menuBtn.addEventListener('click', () => {
		if(!menuOpen){ // When we click 'Menu' button
			menuList.classList.add('menu__list-mobile--open')
			document.body.style='overflow:hidden'
			menuBtn.innerHTML = 'Close'

			// Start menu items animation
			let count = 0
			for(let i = 0; i < menuList.children.length; i++){
				count += 200
				menuList.children[i].style.animation=`menuItemAnim 300ms ease-out ${count}ms forwards`
			}
			// End menu items animation

			// Start submenu open
			let menuMobOpen = false
			menuLinkMobOpen.forEach( (el) => {
				el.addEventListener('click', () => {
					if(!menuMobOpen){
						el.lastElementChild.classList.add('sub-mobile--open')
						el.style='color:#4857DF; opacity:1'
						menuList.lastElementChild.style='padding-bottom:20vh; opacity:1'
						menuMobOpen = true
					} else {
						el.lastElementChild.classList.remove('sub-mobile--open')
						el.style='color:#222; opacity:1'
						menuList.lastElementChild.style='padding-bottom:0; opacity:1'
						menuMobOpen = false
					}
				})
			})
			// End submenu open

			menuOpen = true

		} else { // When we click 'close' button
			menuList.classList.remove('menu__list-mobile--open')
			document.body.style='overflow:auto'
			menuBtn.innerHTML = 'Menu'

			// Start menu items animation reset
			menuListItem.forEach( (menuListItem) => {
				menuListItem.style.animation='none'
			})
			// End menu items animation reset

			// Start submenu reset
			menuLinkMobOpen.forEach( (menuLinkMobOpen) => {
				menuLinkMobOpen.style='opacity:0'
			})
			subMenuListMob.forEach( (subMenuListMob) => {
				subMenuListMob.classList.remove('sub-mobile--open')
			})
			menuList.lastElementChild.style='opacity:0'
			// End submenu reset

			menuOpen = false
		}
	})


	menuListItem.forEach( (menuListItem) => {
		if(menuListItem.classList.contains('menu__list--submenu'))
		menuListItem.firstElementChild.removeAttribute('href')
	})


	// __ Add and remove skew hover effect __
	const menuLink = document.querySelectorAll('.menu__link')
	const goToBox = document.querySelectorAll('.go-to__box')
	if(document.body.clientWidth < 768){
		menuLink.forEach( (menuLink) => {
			menuLink.classList.remove('item__skew--hover')
		})
		goToBox.forEach( (goToBox) => {
			goToBox.classList.remove('item__skew--hover')
		})
	} else {
		menuLink.forEach( (menuLink) => {
			menuLink.classList.add('item__skew--hover')
		})
		goToBox.forEach( (goToBox) => {
			goToBox.classList.add('item__skew--hover')
		})
	}

	// __ Willa circle animation __
	const circle = document.querySelectorAll(".svg-circle");
	circle.forEach( (el) => {
		window.addEventListener('scroll', function() {
			el.style = `transform:rotate(${window.pageYOffset / 3}deg)`;
			});
	})

	// __ Slider __
	const consultancySlider = document.querySelector('.consultancy__slider')
	const speakingSlider = document.querySelector('.speaking__slider')
	const workshopsSlider = document.querySelector('.workshops__slider')
	if(consultancySlider || speakingSlider || workshopsSlider){
		var swiper = new Swiper('.swiper-container', {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}

	// __ Title size for About Page __
	const bioHeader = document.querySelector('.bio__header')
	const logoAbout = document.querySelector('.logo-link__about')
	const widthContainer = document.querySelector('.container').clientWidth
	if(bioHeader){
		if(document.body.clientWidth >= 768){
			bioHeader.style=`
				font-size: ${widthContainer / 10}px;
				line-height: ${widthContainer / 15}px;
				letter-spacing: ${widthContainer / 45}px;`
		} else if (document.body.clientWidth <= 414){
			bioHeader.style=`
				font-size: ${widthContainer / 9.4}px;
				line-height: ${widthContainer / 15}px;
				letter-spacing: ${widthContainer / 88}px;`
			logoAbout.style=`
				font-size: ${widthContainer / 9.5}px;
				letter-spacing: ${widthContainer / 87.8}px;`
		} else {
			bioHeader.style=`
				font-size: ${widthContainer / 9}px;
				line-height: ${widthContainer / 15}px;
				letter-spacing: ${widthContainer / 86}px;`;
			logoAbout.style=`
				font-size: ${widthContainer / 9.5}px;
				letter-spacing: ${widthContainer / 87.8}px;`
		}
	}


	AOS.init()

});

