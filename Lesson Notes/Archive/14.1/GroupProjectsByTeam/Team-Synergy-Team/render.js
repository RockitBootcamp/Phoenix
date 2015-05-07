$(function(){

    var renderCompanyList = function(payload) {
      $('.listing').empty();
      var template = $('#company-media-object').html();
      var companyTemplate = Handlebars.compile(template);
      $('.listing').append(companyTemplate(payload));
  }

  renderCompanyList(payload);
});