// $Id$
Drupal.behaviors.comments_ajax = function (context) {
  $('a.comments-show-all:not(.comments-show-all-processed)', context).click(function () {
    // This function will get exceuted after the ajax request is completed successfully
    var updateComments = function(data) {
      // The data parameter is a JSON object. The “comments” property is the list of products items that was returned from the server response to the ajax request.
      $("#" + "divComments-" + data.nid).html(data.comments);
    }
    var args = this.href.split("/");
    alert(args[args.length - 2]);
    $("#" + "my-loading-" + args[args.length - 2]).css('visibility','visible');
    $.ajax({
      type: 'POST',
      url: this.href, // Which url should be handle the ajax request. This is the url defined in the <a> html tag
      success: updateComments, // The js function that will be called upon success request
      dataType: 'json', //define the type of data that is going to get back from the server
      data: 'js=1' //Pass a key/value pair
    });
    return false;  // return false so the navigation stops here and not continue to the page in the link
  }).addClass('comments-show-all-processed');
  
  
//  $('a.comments-post:not(.comments-post-processed)', context).click(function () {
//    // This function will get exceuted after the ajax request is completed successfully
//    var updateComments = function(data) {
//      // The data parameter is a JSON object. The “comments” property is the list of products items that was returned from the server response to the ajax request.
//      $("#" + "divComments-" + data.nid).html(data.form);
//    }
//    var args = this.href.split("/");
//    $("#" + "my-loading-" + args[args.length - 2]).css('visibility','visible');
//    $.ajax({
//      type: 'POST',
//      url: this.href, // Which url should be handle the ajax request. This is the url defined in the <a> html tag
//      success: updateComments, // The js function that will be called upon success request
//      dataType: 'json', //define the type of data that is going to get back from the server
//      data: 'js=1' //Pass a key/value pair
//    });
//    return false;  // return false so the navigation stops here and not continue to the page in the link
//  }).addClass('comments-post-processed');
}
