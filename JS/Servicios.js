function boton_servicios(servicio) {
  const area = document.getElementById('info_area');
  
  const contenidos = {
    medicina_clinica: `
      <h1>Servicio Clínico :D</h1>
      <p>En San Marcos puede encontrar estos servicios clínicos aleatorios para probar este desarrollo :D </p>
      <br>
      <ul><li>q</li><li>w</li><li>e</li><li>r</li><li>t</li><li>y</li></ul>
    `,
    medicina_respiratoria: `
      <h1>Medicina Respiratoria</h1><br>
      <p>Texto de ejemplo para medicina respiratoria...</p>
    `,
    gastroenterologia: `
      <h1>Gastroenterología</h1><br>
      <p>Texto de ejemplo para gastroenterología...</p>
    `,
    psicologia: `
      <h1>Psicología</h1><br>
      <p>Texto de ejemplo para psicología...</p>
    `,
    fonoaudiologia: `
    <h1>Fonoaudiologia</h1>
    <p>simplementente nose que lorem es eso</p>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, maiores in? Veniam repudiandae reiciendis debitis quos tenetur natus quas sit asperiores! Sit molestiae odio facere, a eligendi maxime hic perspiciatis.</p>
    `,
    nutricion:`
      <h1>Nurtricion</h1>
      <p>confia...</p>
    `,
    traumatologia:`
    <h1>alergista</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, ipsum veniam. Consequuntur, tenetur? Ipsa, exercitationem dolorum et officiis, obcaecati laboriosam impedit quam illum blanditiis amet quidem harum praesentium earum aliquam.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat harum molestias hic ratione dignissimos atque, perspiciatis aliquid quasi asperiores voluptate aperiam commodi itaque nulla cumque eum culpa nostrum iste vel.</p>
    `,
    alergista:`
    <h1>alergista</h1>
    <p>visite muchos en mi vida :D</p>
    `,
    cardiologia:`
    <h1>cardiologia</h1>
    <p>mre recuerda al cardio....no hablemos de eso</p>
    `,
    dermatologia:`
    <h1>dermatologia</h1>
    <p>tengo un amigo con problemas en la piel....es exasperante</p>
    `,
     otorrinolaringologia: `
    <h1>Otorrinolaringología</h1>
    <p>Especialidad médica encargada de los oídos, nariz y garganta. Lorem ipsum dolor sit amet consectetur.</p>
     `,
    diabetologia: `
    <h1>Diabetología</h1>
    <p>Tratamiento y control de la diabetes. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
     `,
     neurologia: `
    <h1>Neurología</h1>
    <p>Diagnóstico y tratamiento de enfermedades del sistema nervioso.</p>
    `,
     flebologia: `
    <h1>Flebolología</h1>
    <p>Especialidad que trata enfermedades de las venas. Lorem ipsum dolor sit amet consectetur.</p>
     `,
     psicopedagogia: `
    <h1>Psicopedagogía</h1>
    <p>Apoyo al aprendizaje y desarrollo cognitivo. Ideal para niños y adolescentes.</p>
    `,
     cirujanos: `
    <h1>Cirujanos</h1>
    <p>Profesionales especializados en intervenciones quirúrgicas. Lorem ipsum dolor sit amet.</p>
     `,
     endocrinologia: `
    <h1>Endocrinología</h1>
    <p>Trastornos hormonales y metabólicos. Lorem ipsum dolor sit amet consectetur adipisicing.</p>
      `,
     urologia: `
    <h1>Urología</h1>
    <p>Tratamiento del aparato urinario y sistema reproductor masculino.</p>
     `,
     pediatria: `
    <h1>Pediatría</h1>
    <p>Atención médica para niños y adolescentes. Lorem ipsum dolor sit amet consectetur.</p>
     `,
     consultas: `
    <h1>Consultas y Seguimiento Profesional</h1>
    <p>Estudios, prácticas y atención médica regular con seguimiento de profesionales.</p>
     `,
     radiologia: `
    <h1>Radiología</h1>
    <p>Diagnóstico por imágenes como radiografías, tomografías y ecografías.</p>
    `,
     laboratorio: `
    <h1>Laboratorio de análisis clínicos</h1>
    <p>Estudios de sangre, orina y otros análisis para diagnóstico médico.</p>
     `,
     guardia_activa: `
    <h1>Guardia médica activa</h1>
    <p>Atención inmediata con profesionales presentes las 24hs.</p>
     `,
     guardia_pasiva: `
    <h1>Guardia médica pasiva</h1>
    <p>Profesionales disponibles para ser llamados en caso de urgencia.</p>
     `



  };

  area.innerHTML = contenidos[servicio] || '<p>Servicio no disponible</p>';
}
