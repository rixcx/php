//path モジュールの読み込み
const path = require('path');
//MiniCssExtractPlugin の読み込み
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const WebpackFixStyleOnlyEntries = require("webpack-fix-style-only-entries"); //jsを吐き出さない
 
module.exports = {
 
  //エントリポイント（デフォルトと同じなので省略可）
  entry: {
    "style": './src/style.scss',
    "admin/style": './src/admin/style.scss'
  },
  //出力先（デフォルトと同じなので省略可）
  output: { 
  //  filename: '[name].js', 
    path: path.resolve('../','webroot','css'),
  },
  module: {
    rules: [
      //SASS 及び CSS 用のローダー
      {
        //拡張子 .scss、.sass、css を対象
        test: /\.(scss|sass|css)$/i, 
        // 使用するローダーの指定（後ろから順番に適用される）
        use: [ MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader' ], 
      },
    ],
  },
  //プラグインの設定
  plugins: [
    new MiniCssExtractPlugin({
      // 抽出する CSS のファイル名
      filename: './[name].css',
    }),
    new WebpackFixStyleOnlyEntries()
  ],
  //source-map タイプのソースマップを出力
  // devtool: 'source-map',
  // node_modules を監視（watch）対象から除外
  watchOptions: {
    ignored: /node_modules/  //正規表現で指定
  },
};