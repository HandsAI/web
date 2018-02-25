var tm =  [
  {
    "section": [
      {
				"name":"Hana Corio",
				"img":"Hana Corio.png",
				"linkedin":"https://ar.linkedin.com/in/hanae-corio-6b7b3585",
				"mail":"mailto:hana@hands.ai"
		},
		{
				"name":"Matias Baglieri",
				"img":"Matias Baglieri.png",
				"linkedin":"https://www.linkedin.com/in/matiasbaglieri/en",
				"mail":"mailto:matias@hands.ai"
		},
		{
			"name":"Gustavo Matus",
				"img":"Gustavo Matus.jpg",
				"linkedin":"https://ar.linkedin.com/in/gustavo-matus-359798124/en",
				"mail":"ailto:matus@hands.ai"
		},
		{
			"name":"Carolina Fogliato",
				"img":"Carolina Fogliato.jpg",
				"linkedin":"https://www.linkedin.com/in/carolina-fogliato-70155a3b/en",
				"mail":"mailto:caro@hands.ai"
		}
    ]
  },
	{
    "section": [

  	{
      	"name":"Alba Portillo",
				"img":"Alba Portillo.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Daniel Pérez",
				"img":"Daniel Pérez.png",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Eduardo Herrera",
				"img":"Eduardo Herrera.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Elizabeth Coronel",
				"img":"Elizabeth Coronel.jpg",
				"linkedin":"#",
				"mail":"#"
		}
    ]
  },
  {
     "section": [

     {
			"name":"Francisco Ramirez",
				"img":"Francisco Ramirez.jpg",
				"linkedin":"#",
				"mail":"#"
			},
      	{
      	"name":"Giomar Maestre",
				"img":"Giomar Maestre.jpg",
				"linkedin":"https://www.linkedin.com/in/maestreparra/",
				"mail":"giomarmaestre@gmail.com"
		},
		{
			"name":"Herwin Rey",
				"img":"Herwin Leon Díaz.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Isabel Rojano",
				"img":"Isabel Rojano.jpg",
				"linkedin":"#",
				"mail":"#"
		}
    ]
  },
  {
     "section": [
     {
			"name":"John Márquez",
				"img":"John Márquez.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Louis Perdomo",
				"img":"Louis Perdomo.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Miguel Salas",
				"img":"Miguel Salas.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Moises Apaza",
				"img":"Moises Apaza.jpg",
				"linkedin":"#",
				"mail":"#"
			}
    ]
  },
  {
     "section": [
      {
      	"name":"Sara Guerrero",
				"img":"Sara Guerrerox.png",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Yasdrid Rojas",
				"img":"Yasdrid Rojas.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Yenireth Marin",
				"img":"Yenireth Marin.jpg",
				"linkedin":"#",
				"mail":"#"
		},
		{
			"name":"Ingrid Steele",
				"img":"Ingrid.jpg",
				"linkedin":"https://www.linkedin.com/in/katzenfrau007?ppe=1",
				"mail":"#"
		}


    ]
  }
];


var dF = $(document.createDocumentFragment());
	 var iin = $('#inn_tm');
		for (var i = 0; i < tm.length; i++) {
			var Tslide = `
			<div id="tmSlide${i}" class="slide" data-thumb="images/slider/boxed/thumbs/2.jpg">
				<div  id="tmcontainer${i} class="container clearfix">
					<div id="Tsrow${i}" class="row"></div>
				</div>
			</div>`;

			iin.append(	Tslide	);

			for (var j = 0; j < tm[i].section.length; j++) {
				var insertin = "#Tsrow".i;
				var tsdiv = `
				<div class="col-sm-12 col-md-3">
					<div  style="text-align: center" class="thumbnail" id="tm_thumbnail">
					<a  href="#" data-toggle="modal" data-target="#myModal5">
						<img class="img-circle" id="team_img"  height="190" style="background: url('../images/Team images/${tm[i].section[j].img}');">
						<div class="ch-info">
								<h3>Use what you have</h3>
								<p>by Francisco Ramirez</p>
						</div>
					</a>
					<div  class="caption">
						<h5>${tm[i].section[j].name}</h5>
					</div>
					<div id="tm_contact${j}">

					</div>
					</div>
				</div>`;

				var tmContact = `<a href="${tm[i].section[j].linkedin}" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
							<i class="icon-linkedin"></i>
							<i class="icon-linkedin"></i>
						</a>
						<a href="${tm[i].section[j].mail}" class="social-icon inline-block si-small si-light si-rounded si-email">
							<i class="icon-email3"></i>
							<i class="icon-email3"></i>
						</a>`;

				$('#Tsrow'+i).append(tsdiv);

				if(tm[i].section[j].mail != '#'){
					$('#tm_contact'+j).append(tmContact);
				}
			}
		}
