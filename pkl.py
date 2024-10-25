import pandas as pd
import pickle
from sklearn.preprocessing import LabelEncoder

# Load the dataset
dataset = pd.read_csv("dataset9000.data")

# Preprocess the data (encode categorical variables, handle missing values, etc.)
# For simplicity, assume all preprocessing steps are done

# Separate features (attributes) and labels (job roles)
X = dataset.drop(columns=['Role'])
y = dataset['Role']

# Encode categorical variables (if any)
# For example, if 'attribute1' is a categorical variable
# label_encoder = LabelEncoder()
# X['attribute1'] = label_encoder.fit_transform(X['attribute1'])

# Save the preprocessed data and labels to a dictionary
data_dict = {
    'X': X,
    'y': y
}

# Save the data dictionary to a pickle file
with open("career.pkl", "wb") as file:
    pickle.dump(data_dict, file)
