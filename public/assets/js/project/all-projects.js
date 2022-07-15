let project_creator_infomations = document.querySelectorAll('.project__creator--info');

project_creator_infomations.forEach(creator_avatar => {
    creator_avatar.addEventListener('click', e =>{
        creator_avatar.classList.toggle('product__creator--explorer')
    })  
})