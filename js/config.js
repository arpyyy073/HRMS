// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyCiyiqWCc-n0o0VJNkKQS3l4wAT2bp-Vj8",
  authDomain: "hyacinth-hrms.firebaseapp.com",
  projectId: "hyacinth-hrms",
  storageBucket: "hyacinth-hrms.firebasestorage.app",
  messagingSenderId: "181148609982",
  appId: "1:181148609982:web:f4937575f1e5ad3a91ddef",
  measurementId: "G-M5TNYCNDTR"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);