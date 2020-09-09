const ids = {
  categories: ['steel', 'pic', 'bannerbomb', 'usm', 'frog', 'fred', 'flip', 'nbhax', 'ntr'],
  steel: ['steel1', 'steel2', 'steel3', 'steel4', 'steel5', 'steel6', 'steel7', 'steel8', 'steel9', 'steel10'],
  pic: ['pic1', 'pic2', 'pic3', 'pic4', 'pic5', 'pic6', 'pic7'],
  bannerbomb: ['bb1', 'bb2', 'bb3', 'bb4'],
  usm: ['usm1', 'usm2', 'usm3', 'usm4'],
  frog: {
    main: ['update', 'frogtable'],
    sub: ['frog1', 'frog2', 'frog3', 'frog4', 'frog5'],
  },
  fred: ['fred1', 'fred2', 'fred3', 'fred4', 'fred5', 'fred6'],
  flip: ['flip1', 'flip2', 'flip3', 'flip4', 'flip5'],
  nbhax: ['nbhax1', 'nbhax2', 'nbhax3', 'nbhax4', 'nbhax5', 'nbhax6', 'nbhax7', 'nbhax8', 'nbhax9'],
  ntr: [''], // added when needed
};

// Elements
function toggleIssueDivs(idSelf = '') {
  reset();
  toggle(ids.categories, idSelf);
}

function singleIssueDivsSteel(idSelf = '') {
  toggle(ids.steel, idSelf);
}

function singleIssueDivsPic(idSelf = '') {
  toggle(ids.pic, idSelf);
}

function singleIssueDivsBannerbomb(idSelf = '') {
  toggle(ids.bannerbomb, idSelf);
}

function singleIssueDivsUSM(idSelf = '') {
  toggle(ids.usm, idSelf);
}

function singleIssueDivsFrog(idSelf = '') {
  toggle(ids.frog.main, idSelf);
}

function singleIssueDivsFrogTable(idSelf = '') {
  toggle(ids.frog.sub, idSelf);
}

function singleIssueDivsNtr(idSelf = '') {
  toggle(ids.ntr, idSelf);
}

function singleIssueDivsFred(idSelf = '') {
	toggle(ids.fred, idSelf);
}

function singleIssueDivsFlip(idSelf = '') {
	toggle(ids.flip, idSelf);
}

function singleIssueDivsBrowserhax(idSelf = '') {
	toggle(ids.nbhax, idSelf);
}
// Util
function toggle(ids, idSelf) {
  show(idSelf);
  ids.filter(id => id != idSelf).forEach(id => hide(id));
}

function reset() {
  ids.steel.forEach(id => hide(id));
  ids.pic.forEach(id => hide(id));
  ids.bannerbomb.forEach(id => hide(id));
  ids.frog.main.forEach(id => hide(id));
  ids.frog.sub.forEach(id => hide(id));
  ids.fred.forEach(id => hide(id));
  ids.flip.forEach(id => hide(id));
  ids.usm.forEach(id => hide(id));
  ids.nbhax.forEach(id => hide(id));
}

function show(id) {
  $(`#${id}`).removeClass('hidden');
}

function hide(id) {
  $(`#${id}`).addClass('hidden');
}
