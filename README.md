# ElectroCardioGram-project
Detect ECG diseases Using Artificial Intelligence 

The project can be entire system which consist of :
1. Embedded system 
2. Artificial intelligence 
3. website 
Mobile application

- the embedded system consist of Arduino Uno , Ad8232 sensor and pulse sensor 
the arduino and sensors used to read the heart beats of the case 
  - the ad8232g sensor read the Heart signals 
  - the pulse sensor read Beats per Menute bpm
  ![ardu 2](https://user-images.githubusercontent.com/89754781/189139653-2aeea8ae-9a03-4851-b75a-8b7b55535d49.jpeg)
![ardu 3](https://user-images.githubusercontent.com/89754781/189139658-88f1ec89-2468-4d21-9614-23b9407e6266.jpeg)
![ardu 4](https://user-images.githubusercontent.com/89754781/189139663-69389008-be86-4900-a762-802ac3a9c9fd.jpeg)
![ardu1](https://user-images.githubusercontent.com/89754781/189139670-606e78bc-4615-42d0-9f96-039842948e54.jpeg)

<h3> second the artificial intelligence part </h3>
the task of Ai is to detect the presence  of disease or not
  usually we have 4 classes of ECG :
    1. normal beats
    2. Supraventricular tachycardia
    3. Ventricular tachycardia
    4. Fusion Beats
and the Ai has to decide what should to do 
and before machine learning and deep learning I perform : Data Cleaning - EDA - Data Visualization 
  note : the data that used is taken from 'https://www.physionet.org/content/mitdb/1.0.0/'
 
![1023898932](https://user-images.githubusercontent.com/89754781/189142793-bd27e11b-6ad3-487d-ab6d-a8fc5b45f1fb.jpg)
![balancing circ1](https://user-images.githubusercontent.com/89754781/189142989-945b2184-b6e3-4625-9721-ee4c5c70b6b2.jpg)
after perform the analysis time to applying the machine learning and deep learning
we notice also in the ecg sample prediction file I read the data from arduino and predict the type using the saving model 
however the best model used is Artificial Neural Network 
because after hard work in Machine learning models ex <b> SVM </b> and <b> XGBoost </b> .....
there is big issue which is the  Overfitting  problem

<h3> Third part the website and mobile application </h3>
in this part I made in order to show the result either to the doctor or to the patient 
- patient part must enter an serial number determined by python random number and act as password per each patient
- doctor part : each doctor must has email and password determined also by the organization that uses the ECG system and the doctor see the whole results for
each patient with serial number for each of them 
note : in the sample prediction file I save the prediction information in xampp mysql and firebase from python for the flutter application and the website which 
is backend by PHP
