document.write( "<ul>" )

document.write( "<li>" )
if (Modernizr.canvas) {
	document.write( "キャンバスあるよー" );
} else {
	document.write( "キャンバスないよー" );
}
document.write( "</li>" )
document.write( "<li>" )
if (Modernizr.localstorage) {
	document.write( "ローカルストレージあるよー" );
} else {
	document.write( "ローカルストレージないよー" );
}
document.write( "</li>" )
document.write( "<li>" )
if (Modernizr.applicationcache) {
	document.write( "オフラインWebキャッシュあるよー" );
} else {
	document.write( "オフラインWebキャッシュないよー" );
}
document.write( "</li>" )
document.write( "<li>" )
if (Modernizr.geolocation) {
	document.write( "位置情報取得サービスあるよー" );
} else {
	document.write( "位置情報取得サービスないよー" );
}
document.write( "</li>" )
document.write( "<li>" )
if (Modernizr.inputtypes.month) {
	document.write( "フォームに月タイプあるよー" );
} else {
	document.write( "フォームに月タイプないよー" );
}
document.write( "</li>" )

document.write( "</ul>" )
