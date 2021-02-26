'use strict';
import { StyleSheet, Dimensions, Platform, StatusBar } from 'react-native';
import Color from '../../component/color';
import Font from '../../component/font';

var { width, height } = Dimensions.get('window');

module.exports = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: Color.white
    },
    
    mainContainer: {
        paddingHorizontal: width * 0.05
    },

    title: {
        fontFamily: Font.bold,
        color: Color.dark_blue,
        fontSize: width * 0.05,
        paddingBottom: width * 0.01
    },

    editText: {
        fontFamily: Font.regular,
        color: Color.dark_blue,
        fontSize:width * 0.035,
        paddingVertical: width * 0.05
    },
   
    textContainer: {
        marginVertical: width * 0.01,
    },

    label: {
        fontFamily: Font.bold, 
        fontSize: width * 0.03, 
        color: Color.dark_blue
    },

    textBox: {
        padding: 0,  
        paddingTop: 1,  
        paddingBottom: 2, 
        borderBottomColor: Color.dark_blue, 
        borderBottomWidth: 2, 
        fontFamily: Font.regular, 
        fontSize: width * 0.055,
        width: width * 0.9
    },

    buttonContainer: {
        paddingVertical: width * 0.05
    },

    buttonTitle: {
        color: Color.white,
        fontFamily: Font.bold, 
        textAlign: 'center',
        fontSize: width * 0.05
    },

    button: {
        backgroundColor: Color.dark_blue,
        borderRadius: 30,
        marginBottom: width * 0.05,
        marginTop: width * 0.01,
        marginHorizontal: 10,
        paddingBottom: width * 0.025,
        paddingTop: width * 0.02
    },

    imageDiv: {
        width: width * 0.9,
        height: width * 0.3,
        borderRadius: 15,
        marginTop: width * 0.03,  
        alignItems: 'center',
        justifyContent: 'center',
        borderWidth: 2,
        borderStyle: "dashed",
        borderColor: Color.dark_blue,
    },

    uploadIcon: {
        width: width * 0.11,
        height: width * 0.09,
    },

    uploadTxt: {
        color: Color.dark_blue,
        fontSize: width * 0.04,
        fontFamily: Font.regular,
    },

    finalImage: {
        width: width * 0.89,
        height: width * 0.29,
        borderRadius: 15,
        // marginTop: width * 0.03,  
        // alignItems: 'center',
        // justifyContent: 'center',
        //borderWidth: 3,
        // borderStyle: "dashed",
        // borderColor: Color.dark_blue,
    },

    picker: {
        fontFamily: Font.bold,
        borderWidth: 2,
        width: width * 0.9,
        paddingBottom: 0,
        //borderWidth: 2,
        //backgroundColor: 'black'
    },

    pickerStyle: {
        fontFamily: Font.bold,
        //borderWidth: 2,
        width: width * 0.9,
        borderBottomWidth: 2,
        //backgroundColor: 'black',
        //borderWidth: 5,
    },

    error: {
        color: Color.red,
        fontFamily: Font.extra_bold,
        fontSize: width * 0.03,
    },

})