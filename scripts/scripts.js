document.addEventListener("DOMContentLoaded", function(){
	// funçoes de criação
	if(window.location.href.includes('index.php')|| window.location.href == ('http://192.168.150.222/nea/')){
		makeDots();
	}
	// funçoes de chamada
	const start = document.querySelector('.start');
	if(start){start.addEventListener('click', startForm, false);}
	
	const nex = document.getElementById('nex');
	if(nex){nex.addEventListener('click', next, false);}
	
	const prev = document.getElementById('prev');
	if(prev){prev.addEventListener('click', previous, false);}
	
	const cy = document.querySelectorAll('#breadCrumbs .cy');
	if(cy){cy.forEach(item => {
		item.addEventListener('click', dotGoTo, false);
	});}
	
	const anonimo = document.getElementById('anonimo');
	if(anonimo){anonimo.addEventListener('change', setAnonimo, false);}
	
	const inputOutros = document.querySelectorAll('input[value="outros"]');
	if(inputOutros){inputOutros.forEach(item => {
		item.addEventListener('change', enableDescription, false);
	});}
	//document.getElementById('print_btn').addEventListener('click', printForm, false);
	
	const dldcsv = document.getElementById('downloadCsv');
	if(dldcsv){dldcsv.addEventListener('click', downloadCsv, false);}
	
	const submit_btn = document.querySelectorAll('.submit_btn');
	submit_btn.forEach(item =>{
		item.addEventListener('click', validaForm, false);
	});
	
	const breadCrumbs = document.querySelector('#breadCrumbs');

	function makeDots(){
		let numb = document.querySelector('.card');
		let cc = numb.childElementCount;
		let bc = document.getElementById('breadCrumbs');
		
		for (i = 0; i < cc; i++) {
			dot = document.createElement('li');
        	dot.textContent = '';
        	dot.classList.add('cy');
        	dot.innerHTML = '<a href="" class="dot"><img src="http://192.168.150.222/nea/style/img/dot.png"></a>';
        	bc.append(dot);
		}
	}
	
	// proximo card
	function startForm(){
		event.preventDefault();
		
		let tgt = document.querySelector(".card .active");
		if(prev.classList.contains('hidden')){
			new show(prev);
		}
		if (nex.classList.contains('hidden')) {
			new show(nex);
		}
		if(!tgt.classList.contains('end')){		
			let next = tgt.nextElementSibling;
			tgt.classList.remove("active");
			new hide(tgt);
			next.classList.add("active");
			new show(next);
		}
		if(tgt.nextElementSibling.classList.contains('end')){
			new hide(nex);
			new hide(prev);
		}
		setTimeout(function(){
			breadCrumbs.style.opacity='1';			
		},250);
		dotGrow();
	}
	function next(){
		event.preventDefault();	
		valida = validaCampos();
		if(valida == 'ok') {
			let tgt = document.querySelector(".card .active");
			if(prev.classList.contains('hidden')){
				new show(prev);
			}
			if (nex.classList.contains('hidden')) {
				new show(nex);
			}
			if(!tgt.classList.contains('end')){		
				let next = tgt.nextElementSibling;
				tgt.classList.remove("active");
				new hide(tgt);
				next.classList.add("active");
				new show(next);
			}
			if(tgt.nextElementSibling.classList.contains('end')){
				new hide(nex);
				new hide(prev);
			}
		}
		dotGrow();
	}
	// card anterior			
	function previous(){
		event.preventDefault();	
		let tgt = document.querySelector(".card .active");
		if(nex.classList.contains('hidden')){
			new show(nex);
		}
		if(!tgt.classList.contains("start")){				
			let prev = tgt.previousElementSibling;
			tgt.classList.remove("active");
			new hide(tgt);
			prev.classList.add("active");
			new show(prev);
		}
		if(tgt.previousElementSibling.classList.contains('start')) {
			new hide(prev)
		}

		dotGrow();					
	}
	// add link aos dots									
	async function dotGoTo(element){
		event.preventDefault();
		//conta os irmaos a esquerda para transformar no ID do child do card
		let el = this.previousElementSibling;
		let tg = document.querySelector('.card');
		let count = 0;
		if(el){
			let prv = el;
			while(prv){
				prv = prv.previousElementSibling;
				count++;
			}					
		}
		let removed = document.querySelector('.card .active');
		let placed = document.querySelector('.card').children[count];

		removed.classList.remove('active');
		new hide(removed);
		placed.classList.add('active');
		new show(placed);

		if(!placed.classList.contains('start') || !placed.classList.contains('end')){
			new show(prev);
			new show(nex);
			//console.log(left)
		}
		if(placed.classList.contains('start')){
			new hide(prev);
			new show(nex);
		}
		if(placed.classList.contains('end')){
			new hide(prev);
			new hide(nex);
		}
		dotGrow();
	}
	function dotGrow(){
		let activeCard = document.querySelector('.card .active');
		let sib = activeCard.previousElementSibling;
		let count = 0;
		if(sib){
			let prv = sib;
			while(prv){
				prv = prv.previousElementSibling;
				count++;
			}					
		}
		let tg = document.querySelectorAll('#breadCrumbs li');
		for(i = 0; i < tg.length; i++){
			tg[i].classList.remove('grow');
		}
		tg[count].classList.add('grow');
	}
	function setAnonimo(){
		event.preventDefault();
		let nome_relator = document.getElementById('relator');
		let relator_anonimo = document.getElementById('anonimo');
		if(relator_anonimo.checked == true){
			nome_relator.disabled = true;
			nome_relator.value = 'Anonimo';
			tgLabel = document.querySelector('.active label');
			tgLabel.style.border = 'none';
			nome_relator.required = false;
			//console.log('enable');
		}
		if(!relator_anonimo.checked == true){
			nome_relator.disabled = false;
			nome_relator.required = true;
			nome_relator.value = '';
			//console.log('dis');
		}
	}
	// funçoes uteis
	function hide(e){
		e.classList.add('hidden');
	}
	function show(e){
		e.classList.remove('hidden');
	}
	function remove_req(){
		let pwInputs = document.querySelectorAll('input[type="password"]');
		pwInputs.forEach(pwInput => {
			pwInput.classList.remove('required');
		})
		this.classList.remove('required');
	}
	//função das setas de avançar e voltar
	function validaCampos(){
		let input = document.querySelectorAll('.active input[required]');
		let reqSelect = document.querySelectorAll('.active select[required]');
		let reqArea = document.querySelectorAll('.active textarea[required]');

		if(input.length == 0 && reqSelect.length == 0 && reqArea.length == 0){
			result = 'ok';
			return result;
		}
		if(input){
			for (i = 0; i < input.length; i++) {
				if(input[i].type == 'text'){
					if(input[i].value.length == 0){
						inputId = input[i].id;
						tgLabel = document.querySelector('.active label[for="'+inputId+'"]');
						if(tgLabel){
						}
						if(!tgLabel){
						}
						input[i].classList.add('required');
						input[i].focus();
						result = 'erro';
						return result;
					}
					if(input[i].value.length > 0){
						inputId = input[i].id;
						tgLabel = document.querySelector('.active label[for="'+inputId+'"]')
						if(tgLabel){
							tgLabel.classList.remove('required');
						}
						if(!tgLabel){
							input[i].classList.remove('required');
						}
						result = 'ok';
						return result;
					}
				}
				if(input[i].type == 'radio' && input[i].checked == false){
					inputId = input[i].id;
					tgLabel = document.querySelector('.active label[for="'+inputId+'"]');
					if(tgLabel){
						tgLabel.classList.add('required');
					}
					if(!tgLabel){
						input[i].classList.add('required');
					}
					input[i].focus();
					result = 'erro';
					return result;
				}
				else {
					result = 'ok';
					return result;
				}
			}
		}
		if(reqSelect){
			for (e = 0; e < reqSelect.length; e++) {
				if(reqSelect[e].value == 'selecionar'){
					reqSelect[e].classList.add('required');
					result = 'erro';							
					reqSelect[i].focus();
					return result;
				}
				if(reqSelect[e].value != ''){
					reqSelect[e].classList.remove('required');
					result = 'ok';
					return result;
				}
			}
		}
		if(reqArea){			
			for (o = 0; o < reqArea.length; o++) {
				if(reqArea[o].value.length == 0){
					reqArea[o].classList.add('required');
					result = 'erro';						
					reqArea[o].focus();
					return result;
				}
				if(reqArea[o].value.length > 0){
					reqArea[o].classList.remove('required');
					result = 'ok';
					return result;
				}
			}
		}
	}
	function validaForm(){
		event.preventDefault();
		const reqInput = document.querySelectorAll('.notificacao input[required]');
		const reqSelect = document.querySelectorAll('.notificacao select[required]');
		const reqArea = document.querySelectorAll('.notificacao textarea[required]');
		const pasw = document.querySelectorAll('input[type="password"]');
		let pack = [];
		console.log(reqInput);
		if(reqInput){
			reqInput.forEach(inp => {
				if(inp.value == ''){
					pack.push(inp);
					inp.classList.add('required');
				}
			});
		}
		if(reqSelect){
			reqSelect.forEach(sel => {
				if(sel.value == ''){
					pack.push(sel);
					sel.classList.add('required');
				}
			})
		}	
		if(reqArea){
			reqArea.forEach(area => {
				if(area.value == ''){
					pack.push(area);
					area.classList.add('required');
				}
			})			
		}
		if(pasw.required == 'true'){
			let pwRow = [];
			pasw.forEach(pw => {
				if(pw.value == ''){
					pack.push(pw);
					pw.classList.add('required');
				}
				else{
					pwRow.push(pw.value);
				}
				
			});
			if(pwRow[1] && pwRow[0] != pwRow[1]){
				alert('senhas não conferem');
				pasw.forEach(thg => {
					thg.classList.add('required');
					pack.push(thg);
				})
			}
		}

		let req = document.querySelectorAll('.required');
		if(req){req.forEach(re => {
			re.addEventListener('click', remove_req, false);
		})}
			
		if(pack.length > 0 ){
			if(window.location.href.includes('index.php')){
				let tg = pack[0].parentNode.parentNode;
				let oldScreen = document.querySelector('.card .active');		
				let left = document.getElementById('prev');
				let right = document.getElementById('nex');
				show(left);
				show(right);
				oldScreen.classList.remove('active');
				hide(oldScreen);
				tg.classList.add('active');
				show(tg);
				pack[0].focus();
				dotGrow();
			}
		}
		if(pack.length==0){
			document.querySelector('.hidden_submit_btn').click();
		}
	}
	function enableDescription(){
		let input = this;
		let inputDescId = input.id+'_desc';
		let inputDesc = document.getElementById(inputDescId);
		if(this.checked){
			inputDesc.disabled = false;
			inputDesc.required = true;
			inputDesc.focus();
		}
		let wholeTg = document.querySelectorAll('.active input');
		for (i = 0; i < wholeTg.length; i++) {
			wholeTg[i].addEventListener('change', checkFocus, false);
		}
	}
	function checkFocus(){
		let tgOutros = document.querySelector('.active input[value="outros"]');
		let inputDescId = tgOutros.id+'_desc';
		let inputDesc = document.getElementById(inputDescId);
		let wholeTg = document.querySelectorAll('.active input');
		if(!tgOutros.checked){
			inputDesc.disabled = true;
			inputDesc.required = false;
			for (o = 0; o < wholeTg.length; o++) {
				wholeTg[o].removeEventListener('change', checkFocus, false);
			}
		}
	}
	function downloadCsv(){
		let inputAll = document.querySelectorAll('input');
		let textAreaAll = document.querySelectorAll('textarea');
		let selectAll = document.querySelectorAll('select');
		let inputName = [];
		let inputValue = [];
		for(i=0;i<inputAll.length;i++){
			if(inputAll[i].value!=''){
				let valueOK = inputAll[i];
				if(valueOK.type=='radio'||valueOK.type=='checkbox'){
					let typeOk = valueOK
					if(typeOk.checked==true){
						checkedOk = typeOk;
						if(checkedOk.id!='anonimo'){
							inputName.push(checkedOk.name);
							if(checkedOk.value=='on'){
								inputName.push(checkedOk.id);
							}else{
								inputValue.push(checkedOk.value);
							}
						}						
					}
				}
				else{
					inputName.push(valueOK.name);
					inputValue.push(valueOK.value);
				}
			}
		}
		for(e=0;e<selectAll.length;e++){
			if(selectAll[e].value!=''){
				inputName.push(selectAll[e].id);
				inputValue.push(selectAll[e].value);
			}
		}
		for(a=0;a<textAreaAll.length;a++){
			if(textAreaAll[a].value!=''){
				inputName.push(textAreaAll[a].name);
				inputValue.push(textAreaAll[a].value);
			}
		}
		let csv = [];
				
		let data = [];
	    for(d=0;d<data.length;d++){
	    	let commaLessData = data[d].replaceAll(',', '');
	    	csv.push(commaLessData);
	    	if(d%2!=0){
	    		csv.push('\n');
	    	}
	    	//console.log(csv);
	    }
	 
	   // console.log(csv);
	    let pessoa_atingida = document.getElementById('nome_atingido').value;
	    let hiddenElement = document.createElement('a');
	    hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
	    hiddenElement.target = '_blank';
	    hiddenElement.download = pessoa_atingida + '.csv';
	    hiddenElement.click();
	}
})