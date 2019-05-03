$(function () {
    //run one time in ALL top
    var ids = ['#parent_hits', '#parent_new', '#parent_lider'];
    ids.forEach(function (item, i, arr) {
        var parent = $(item);
        var divs = parent.children();
        while (divs.length) {
            parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
        }
        parent.show();
    });
});
//
// /* регистрируем в ГА добавление товара в корзину */
//     $('.ga').click(function(){
//         ga('ec:addProduct', {
//             'id':   $(this).data('articul'),
//             'name': $(this).data('name'),
//             'category': $(this).data('category'),
//             'brand': $(this).data('brand')
//     //        'variant': '',
//     //        'position': 1,
//         });
//         ga('ec:setAction', 'add');
//         ga('send', 'event', 'UX', 'click', 'add to cart');
//
//         /* ГА Клик по кнопке "купить" на страницах листинга и главной: */
//         ga('send', {
//             hitType: 'event',
//             eventCategory: 'Basket',
//             eventAction: 'buy_basket'
//         });
//
//         // YMet добавление товара в корзину
//         dataLayer.push({
//             "ecommerce": {
//                 "add": {
//                     "products": [
//                         {
//                             "id":  $(this).data('articul'),
//                             "name": $(this).data('name'),
//                             "price":  $(this).data('price'),
//                             "brand": $(this).data('brand'),
//                             "category": $(this).data('category'),
//                             "quantity": 1
//                         }
//                     ]
//                 }
//             }
//         });
//
//     });
//
//     /* регистрируем в ГА переход в карточку товара */
//     $('.ga_detail').click(function(){
//         ga('ec:addProduct', {
//             'id':   $(this).data('articul'),
//             'name': $(this).data('name'),
//             'category': $(this).data('category'),
//             'brand': $(this).data('brand')
//         });
//         ga('ec:setAction', 'detail');
//         ga('send', 'pageview');
//         // YMet  переход в карточку товара
//         dataLayer.push({
//             "ecommerce": {
//                 "detail": {
//                     "products": [
//                         {
//                             "id": $(this).data('articul'),
//                             "name" : $(this).data('name'),
//                             "price": $(this).data('price'),
//                             "brand": $(this).data('brand'),
//                             "category": $(this).data('category')
//                         }
//                     ]
//                 }
//             }
//         });
//     });