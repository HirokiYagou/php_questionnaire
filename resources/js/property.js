if (document.URL.match( /create/ )) {
  const propertyHidden = document.getElementById('propertyHidden');
  const submitBtn = document.getElementById('submitBtn');
  submitBtn.addEventListener('click', () => {
    // 4つの選択肢にそれぞれ素数を付与する
    const detachedNew = (document.getElementById('detached-new').checked) ? 2 : 1;
    // 新築一戸建てがチェックされていたら2、されていなかったら1を代入
    const detachedOld = (document.getElementById('detached-old').checked) ? 3 : 1;
    // 中古一戸建てがチェックされていたら3、されていなかったら1を代入
    const apartment = (document.getElementById('apartment').checked) ? 5 : 1;
    // マンションがチェックされていたら5、されていなかったら1を代入
    const land = (document.getElementById('land').checked) ? 7 : 1;
    // 土地がチェックされていたら7、されていなかったら1を代入
    const property = detachedNew * detachedOld * apartment * land;
    // それぞれ素数であるため一意の数値を持つ
    // =>新築一戸建て=>2を約数に持つ
    // =>中古一戸建て=>3を約数に持つ
    // =>マンション=>5を約数に持つ
    // =>土地=>7を約数に持つ
    // =>何も選択されていない時=>1
    propertyHidden.value = (property === 1) ? null : property;
    // 何も選択されていない時=>1はnullを返してバリデーションで弾く
  });
}
