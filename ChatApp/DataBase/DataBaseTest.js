//Getting started to use database

const mongoose = require('mongoose');
const Promise = require('bluebird');

// mongoose.connect('mongodb://localhost/test');
//
// const db = mongoose.connection;
// db.on('error', console.error.bind(console, 'connection error'));
// db.once('open', () => {
//    console.log('We are connected');
//
//    const personSchema = new mongoose.Schema({
//        username: string,
//
//    })
// });

const UserSchema = new mongoose.Schema({
    email: {
        type: String,
        unique: true,
        required: true,
        trim: true
    },
    username: {
        type: String,
        unique: true,
        required: true,
        trim: true
    },
    password: {
        type: String,
        required: true,
    },
});

const User = mongoose.model('User', UserSchema);
module.exports = User;